<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Core\Configure;

/**
 * ShortUrl Entity
 *
 * @property int $id
 * @property string $hash
 * @property string $url
 * @property \Cake\I18n\FrozenTime $created
 * @property int $enabled
 */
class ShortUrl extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'hash' => true,
        'url' => true,
        'created' => true,
        'enabled' => true,
    ];

    /**
     * 短縮後のURL取得
     */
    protected function _getConvertedUrl()
    {
        return Configure::read('ShortUrlDomain').DS.$this->hash;
    }
}
