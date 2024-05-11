<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class UrlShortening extends AbstractMigration
{
    /**
     * Up Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-up-method
     * @return void
     */
    public function up(): void
    {
        $this->table('short_url', ['id' => false, 'primary_key' => ['id'], 'collation' => 'utf8mb4_general_ci'])
            ->addColumn('id', 'biginteger', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('hash', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
                'collation' => 'utf8mb4_bin',
            ])
            ->addColumn('url', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
                'collation' => 'utf8mb4_bin',
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('enabled', 'tinyinteger', [
                'default' => '1',
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                ['hash'],
                ['unique' => true]
            )
            ->create();
    }

    /**
     * Down Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-down-method
     * @return void
     */
    public function down(): void
    {

        $this->table('short_url')->drop()->save();
    }
}
