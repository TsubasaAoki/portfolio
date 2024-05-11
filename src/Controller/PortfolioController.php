<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\ORM\Exception\PersistenceFailedException;

/**
 * Portfolio Controller
 */
class PortfolioController extends AppController
{
    protected $defaultTable = 'ShortUrl';
    const HASH_LENGTH = 20;
    const ERROR_MSG = 'エラーが発生しました。';

    public function index()
    {
        $this->set(['ShortUrlDomain' => Configure::read('ShortUrlDomain').DS]);

        if ($data['url'] = $this->request->getData('url')) {
            $shortUrl = $this->fetchTable();
            $result = false;

            while (true) {
                try {
                    $data['hash'] = $this->_makeHash();
                    $entity = $shortUrl->newEntity($data);
                    if ($result = $shortUrl->saveOrFail($entity)) break;
                } catch (PersistenceFailedException $e) {
                    if ($entity->getError('hash')['unique']) {
                        continue;
                    } else {
                        $this->log($e->getTraceAsString(), 'error');
                        $this->Flash->error(self::ERROR_MSG);
                        break;
                    }
                }
            }
            $this->set(['shortUrl' => $result]);
        }
    }

    /**
     * Hash生成
     * @param void
     * @return string Hash
     */
    private function _makeHash()
    {
        $hash_chars = ["\u{200B}", "\u{200C}", "\u{200D}", "\u{FEFF}"];
        $hash = null;
        for ($i = 0; $i < self::HASH_LENGTH; $i++) {
            $hash .= $hash_chars[rand(0, count($hash_chars) - 1)];
        }
        return $hash;
    }
}
