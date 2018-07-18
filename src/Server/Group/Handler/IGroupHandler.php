<?php
namespace Imi\Server\Group\Handler;

interface IGroupHandler
{
	/**
	 * 组是否存在
	 *
	 * @param string $groupName
	 * @return boolean
	 */
	public function hasGroup(string $groupName);

	/**
	 * 创建组，返回组对象
	 *
	 * @param string $groupName
	 * @param integer $maxClients
	 * @return \Imi\Server\Group\Group
	 */
	public function createGroup(string $groupName, int $maxClients = -1);

	/**
	 * 加入组，组不存在则自动创建
	 *
	 * @param string $groupName
	 * @param integer $fd
	 * @return void
	 */
	public function joinGroup(string $groupName, int $fd);

	/**
	 * 离开组，组不存在则自动创建
	 *
	 * @param string $groupName
	 * @param integer $fd
	 * @return void
	 */
	public function leaveGroup(string $groupName, int $fd);
	
	/**
	 * 获取所有fd
	 *
	 * @param string $groupName
	 * @return int[]
	 */
	public function getFds(string $groupName): array;
}