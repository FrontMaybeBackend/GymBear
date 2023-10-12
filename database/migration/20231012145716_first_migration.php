<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class FirstMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('users', ['id' => false]);
        $table->addColumn('id', 'integer')
            ->addColumn('username', 'string', ['limit' => 100])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('role', 'string', ['limit' => 255])
            ->addColumn('training', 'text')
            ->create();

        $table = $this->table('adminpanel', ['id' => false]);
        $table->addColumn('id', 'integer')
            ->addColumn('admin', 'string', ['limit' => 10])
            ->addColumn('password', 'string', ['limit' => 10])
            ->create();

        $table = $this->table('diets', ['id' => false, 'primary_key' => 'id']);
        $table->addColumn('id', 'integer')
            ->addColumn('title', 'string', ['limit' => 255])
            ->addColumn('diet', 'text')
            ->addColumn('img', 'binary', ['limit' => Phinx\Db\Adapter\MysqlAdapter::BLOB_LONG])
            ->create();

        $table = $this->table('recomennded', ['id' => false]);
        $table->addColumn('id', 'integer')
            ->addColumn('programms', 'text')
            ->addColumn('title', 'text')
            ->addColumn('img', 'binary', ['limit' => Phinx\Db\Adapter\MysqlAdapter::BLOB_LONG])
            ->create();

        $table = $this->table('users_plans', ['id' => false]);
        $table->addColumn('ID', 'integer')
            ->addColumn('username', 'text')
            ->addColumn('exc_name', 'text')
            ->addColumn('exc_series', 'text')
            ->addColumn('exc_reps', 'text')
            ->addColumn('name_train', 'text')
            ->addColumn('day', 'text')
            ->create();

        $table = $this->table('supplements', ['id' => false]);
        $table->addColumn('id', 'integer')
            ->addColumn('title', 'text', ['limit' => Phinx\Db\Adapter\MysqlAdapter::TEXT_MEDIUM])
            ->addColumn('body', 'text')
            ->addColumn('img', 'binary', ['limit' => Phinx\Db\Adapter\MysqlAdapter::BLOB_LONG])
            ->create();
    }
}
