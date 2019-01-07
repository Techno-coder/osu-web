<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'breadcrumbs' => [
        'news-index' => 'listing',
        'news-show' => 'post',
    ],

    'index' => [
        'title_page' => 'osu!news',

        'nav' => [
            'newer' => 'Newer posts',
            'older' => 'Older posts',
        ],

        'title' => [
            '_' => 'News :info',
            'info' => 'Frontpage',
        ],
    ],

    'show' => [
        'by' => 'by :user',
        'posted' => 'posted :time',

        'nav' => [
            'newer' => 'Newer post',
            'older' => 'Older post',
        ],

        'title' => [
            '_' => 'News :info',
            'info' => 'Entry',
        ],
    ],

    'store' => [
        'button' => 'Update',
        'ok' => 'Listing updated.',
    ],

    'update' => [
        'button' => 'Update',
        'ok' => 'Post updated.',
    ],
];
