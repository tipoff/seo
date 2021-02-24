<?php

declare(strict_types=1);

namespace Tipoff\Seo;

use Tipoff\Seo\Models\Company;
use Tipoff\Seo\Models\Domain;
use Tipoff\Seo\Models\Keyword;
use Tipoff\Seo\Policies\CompanyPolicy;
use Tipoff\Seo\Policies\DomainPolicy;
use Tipoff\Seo\Policies\KeywordPolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class SeoServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                Company::class => CompanyPolicy::class,
                Keyword::class => KeywordPolicy::class,
                Domain::class => DomainPolicy::class,
            ])
            ->name('seo')
            ->hasConfigFile();
    }
}
