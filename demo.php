<?php
require 'vendor/autoload.php';
$config = [
	//缓存表字段
	'cache_field' => true,
	//表字段缓存目录
	'cache_dir'   => 'storage/field',
	//读库列表
	'read'        => [ ],
	//写库列表
	'write'       => [ ],
	//开启读写分离
	'proxy'       => false,
	//主机
	'host'        => 'localhost',
	//类型
	'driver'      => 'mysql',
	//帐号
	'user'        => 'root',
	//密码
	'password'    => 'admin888',
	//数据库
	'database'    => 'demo',
	//表前缀
	'prefix'      => ''
];
\houdunwang\config\Config::set( 'database', $config );
$res = \houdunwang\database\Schema::getFields('news');
\houdunwang\database\Schema::create( 'aba', function ( \houdunwang\database\build\Blueprint $table ) {
	$table->increments( 'id' );
	$table->string( 'title', 100 );
	$table->tinyInteger( 'nums' )->unsigned();
	$table->char( 'name', 30 )->nullable()->defaults( '后盾网' )->comment( '这是注释' );
	$table->timestamps();
} );