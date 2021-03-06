<?php
/**
 * @copyright Copyright (c) 2008 – 2016 www.08cms.com
 * @author 08cms项目开发团队
 * @package 08cms
 * create date 2016年4月19日
 */
namespace ManageBundle\Security\User;

interface UserManagerInterface
{
    function hasUsername($username);
    function getUsernames();
    function getRoles();
    function getRolesForUsername($username);
    function setRolesForUsername($username, array $roles);
}
