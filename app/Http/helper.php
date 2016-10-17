<?php


function AuthUserData()
{
	return json_decode($_COOKIE['__ARM_UA']);
}