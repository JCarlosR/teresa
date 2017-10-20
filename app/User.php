<?php

namespace App;

use App\Teresa\Clients\Accessors\CustomersRelatedAccessors;
use App\Teresa\Clients\Accessors\PagePresentationAccessors;
use App\Teresa\Clients\Accessors\ServicesRelatedAccessors;
use App\Teresa\Clients\Accessors\SiteMapRelatedAccessors;
use App\Teresa\Clients\Accessors\SlidesRelatedAccessors;
use App\Teresa\Clients\Methods\SocialProfilesMethods;
use App\Teresa\Clients\Accessors\CmsRelatedAccessors;
use App\Teresa\Clients\Accessors\DataPresentationAccessors;
use App\Teresa\Clients\Accessors\PhotosRelatedAccessors;
use App\Teresa\Clients\Accessors\RolesRelatedAccessors;
use App\Teresa\Clients\Accessors\SectionsRelatedMethods;
use App\Teresa\Clients\Accessors\TypeAndStatusAccessors;
use App\Teresa\Clients\Relationships\WorkScheduleRelationships;
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

    protected $dates = [
        'service_started_at'
    ];

    // where to redirect users after login / registration.
    protected $adminPath = '/admin';
    protected $superClientPath = '/super/client';
    protected $clientPath = '/dashboard';

    // accessors: client data
    use DataPresentationAccessors;
    use RolesRelatedAccessors;
    use TypeAndStatusAccessors;

    // accessors: client content
    use SiteMapRelatedAccessors;
    use PagePresentationAccessors;
    use ProjectsRelatedAccessors;
    use ServicesRelatedAccessors;
    use CustomersRelatedAccessors;
    use CmsRelatedAccessors;

    // accessors: photos
    use PhotosRelatedAccessors;

    // methods
    use SocialProfilesMethods;
    use SectionsRelatedMethods;

    // relationships
    use ContentRelatedRelationships;
    use WorkScheduleRelationships;

    // scopes
    use RolesRelatedScopes;
}
