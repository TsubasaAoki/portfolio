<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
?>
<?php if (! empty($message)): ?>
    <script>
        $(window).on("load", function () {
            new jBox('Notice', {
                content: '<?= $message ?>',
                color: 'green',
                showCountdown: true,
            });
        });
    </script>
<?php endif; ?>