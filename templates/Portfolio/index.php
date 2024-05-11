<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ShortUrl $shortUrl
 */
$this->assign('title', 'Invisible Shortener | Tsubasa Aoki\'s portfolio');
?>
<?= $this->Html->css('portfolio') ?>
<?= $this->Html->script(['prevent_multiple_submit', 'make_short_url']) ?>
<div class="row">
  <div class="column-responsive column-100">
    <div class="logo">
      <?= $this->Html->image('logo_invisible_shortener.svg', ['class' => 'logo', 'alt' => 'Invisible Shortener']) ?>
    </div>
    <div class="shortener_content">
      <?= $this->Form->create(null) ?>
      <div class="url">
        <?= $this->Form->control('url', [
          'label' => false,
          'autocomplete' => 'off',
          ]) ?>
        <?= $this->Form->button(__('短 縮'), ['disabled' => true]) ?>
      </div>
      <?= $this->Form->end() ?>
      <?php if ($shortUrl ?? false): ?>
        <div class="converted">
          <p id="converted-url"><?= $shortUrl->converted_url ?></p>
        </div>
      <?php endif; ?>
      <div class="note">
        <ul class="noto-sans-jp-thin">
          <li>仕様上、一部のメールソフトやチャットツールでは短縮URLをペーストすると正常に動作しないことがあります。</li>
          <li>発行したURLは1日で全て消去されます。本サイトを1日で作成したことと関係があるかもしれません。</li>
        </ul>
      </div>
      <div class="source_code">
        <a href="https://github.com/TsubasaAoki/portfolio" target="_blank" rel="noopener noreferrer">
          <?= $this->Html->image("mark-github.svg", ["alt" => "source_code"]) ?>
        </a>
      </div>
    </div>
    <hr>
    <div class="profile">
      <h2>- PROFILE -</h2>
      <div class="profile_contents">
        <p class="name_kanji noto-sans-jp-bold">青木 飛翔</p>
        <p class="name noto-sans-jp-bold">TSUBASA AOKI</p>
        <p class="role noto-sans-jp-thin">Front-end & Back-end Developer</p>
        <div class="skill_roadmap">
          <a href="https://roadmap.sh/u/taoki" target="_blank">
            <img src="https://roadmap.sh/card/wide/663dad7be8cf2039c5c17067?variant=dark&roadmaps=frontend%2Cbackend" alt="skill roadmap progress"/>
          </a>
        </div>
        <div class="language_and_framework">
          <div>
            <?= $this->Html->image("logo_html5-javascript-css3.png", ["alt" => "HTML & CSS & JavaScript"]) ?>
            <?= $this->Html->image("logo_php.svg", ["alt" => "PHP"]) ?>
            <?= $this->Html->image("logo_cakephp.svg", ["alt" => "CakePHP"]) ?>
            <?= $this->Html->image("logo_python.svg", ["alt" => "Python"]) ?>
            <?= $this->Html->image("logo_mysql.svg", ["alt" => "MySQL"]) ?>
          </div>
          <p class="noto-sans-jp-thin">now learning...</p>
          <div class="now_learning">
            <?= $this->Html->image("logo_react.svg", ["alt" => "React"]) ?>
            <?= $this->Html->image("logo_nextjs.svg", ["alt" => "Next.js"]) ?>
            <?= $this->Html->image("logo_typescript.svg", ["alt" => "TypeScript"]) ?>
            <?= $this->Html->image("logo_tailwindcss.svg", ["alt" => "TailwindCSS"]) ?>
            <?= $this->Html->image("logo_flutter.svg", ["alt" => "Flutter"]) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="works">
      <h2>- WORKS -</h2>
      <div class="works_contents">
        <div>
          <a href="https://www.accelia.jp/withAccelia" target="_blank" rel="noopener noreferrer">
            <?= $this->Html->image("with_accelia.png", ["alt" => "withAccelia"]) ?>
          </a>
          <p class="company">アクセリア株式会社</p>
          <p class="product">ランディングページ制作</p>
          <p class="role">Project Manager, Front-end Developer</p>
        </div>
        <div>
          <a href="https://www.mfeed.ad.jp/transix/overview.html" target="_blank" rel="noopener noreferrer">
            <?= $this->Html->image("transix.png", ["alt" => "transix"]) ?>
          </a>
          <p class="company">インターネットマルチフィード株式会社</p>
          <p class="product">サービスオーダ受付システム開発</p>
          <p class="role">Project Manager, Back-end Developer</p>
        </div>
      </div>
    </div>
  </div>
</div>
