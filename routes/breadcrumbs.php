<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Settings');
});

// Student Settings -> Account
Breadcrumbs::for('account', function ($trail) {
    $trail->parent('home');
    $trail->push('Account', route('student.settings.account'));
});

// Student Settings -> Profile
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push('Profile', route('student.settings.profile'));
});