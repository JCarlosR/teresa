<?php

namespace App;

use App\Teresa\Clients\Accessors\DataPresentationAccessors;
use App\Teresa\Clients\Accessors\RolesRelatedAccessors;
use App\Teresa\Clients\Accessors\ServicesRelatedAccessors;
use App\Teresa\Clients\Accessors\TypeAndStatusAccessors;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Teresa\Clients\Relationships\ContentRelatedRelationships;
use App\Teresa\Clients\Accessors\ProjectsRelatedAccessors;
use App\Teresa\Clients\Scopes\RolesRelatedScopes;

class User extends Authenticatable
{
    /**
     * @property boolean $is_admin
     * @property boolean $is_client
     */

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // where to redirect users after login / registration.
    protected $clientPath = '/dashboard';
    protected $adminPath = '/admin';

    // accessors: client data
    use DataPresentationAccessors;
    use RolesRelatedAccessors;
    use TypeAndStatusAccessors;
    // accessors: client content
    use ProjectsRelatedAccessors;
    use ServicesRelatedAccessors;

    // relationships
    use ContentRelatedRelationships;

    // scopes
    use RolesRelatedScopes;
}
