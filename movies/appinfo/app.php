<?php

/**
 * ownCloud - Movies App
 *
 * @author Frank Karlitschek
 * @copyright 2011 Frank Karlitschek karlitschek@kde.org
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either 
 * version 3 of the License, or any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *  
 * You should have received a copy of the GNU Lesser General Public 
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

OCP\Util::addStyle( 'movies', 'style');

OCP\App::register(array('order' => 70, 'id' => 'movies', 'name' => 'Movies'));

OCP\App::addNavigationEntry(array(
	'id' => 'movies_index', 
	'order' => 80, 
	'href' => OCP\Util::linkTo('movies', 'index.php'), 
	'icon' => OCP\Util::imagePath('movies', 'videos.svg'), 
	'name' => 'Videos')
);
