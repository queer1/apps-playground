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
namespace OCA\Movies;

\OCP\User::checkLoggedIn();
\OCP\JSON::checkAppEnabled('movies');
\OCP\App::setActiveNavigationEntry( 'movies_index' );

\OCP\Util::addStyle( 'movies', 'style' );
\OCP\Util::addScript( 'movies', 'app' );
\OCP\Util::addScript( 'movies/3rdparty', 'masonry.pkgd' );

\OCP\Util::addStyle( 'files_videoviewer', 'style' );
\OCP\Util::addStyle( 'files_videoviewer', 'mediaelementplayer' );
\OCP\Util::addscript( 'files_videoviewer', 'viewer');

$manager = new MoviesManager();
$movies = $manager->getMovies();
$tmpl = new \OCP\Template('movies', 'movies', 'user');
$tmpl->assign('movies', $movies);
$tmpl->printPage();


