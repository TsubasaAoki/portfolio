<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\Exception\RecordNotFoundException;

/**
 * Redirect Controller
 */
class RedirectController extends AppController
{
    protected $defaultTable = 'ShortUrl';
    const ERROR_MSG = '無効なURLです。';

    /**
     * Index method
     */
    public function index($hash)
    {
        try {
            $shortUrl = $this->fetchTable()->findByHashAndEnabled($hash, 1)->firstOrFail();
            return $this->redirect($shortUrl->url);
        } catch (RecordNotFoundException $e) {
            $this->set(['message' => self::ERROR_MSG]);
            $this->render('/Error/error');
        }
    }
}
