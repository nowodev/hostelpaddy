<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Student Home', route('student.index'));
});

// Student Home > Account Settings
Breadcrumbs::for('account', function ($trail) {
    $trail->parent('home');
    $trail->push('Account', route('student.settings.account'));
});

// Student Home > Profile Settings
Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push('Profile', route('student.settings.profile'));
});