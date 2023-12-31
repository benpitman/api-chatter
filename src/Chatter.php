<?php

namespace App;

use App\Core\Store\Config;
use App\Core\Store\Local;
use Kentron\AApp;

use Illuminate\Database\Capsule\Manager as Capsule;

use App\Core\Store\Variable\Variable;

use App\Http\Router;
use App\Module\Core\System\Variable\VariableSqlService;
use Kentron\ASlimApp;
use Symfony\Component\Console\Helper\Dumper;
use Symfony\Component\VarDumper\Dumper\CliDumper;

use function rr\dd;

/**
 * The inital application class, injected into the controllers
 */
final class Chatter extends ASlimApp
{
    public function resetStores(): void
    {
        // Config::reset();
        // Variable::reset();
        // Local::reset();
    }

    public function boot (): void
    {
        $this->reset();
        $this->bootRouter();
        // $this->loadConfig();
        // $this->bootOrm();
        // $this->loadVariables();
    }

    protected function loadConfig (): void
    {
        // Config::load();
    }

    protected function loadVariables (): void
    {
        // Variable::build(VariableSqlService::getAll(), Config::getDatabaseKey());
    }

    // protected function allowedAccess (): bool
    // {
    //     return Variable::getSystemAccess();
    // }

    protected function bootRouter (): void
    {
        Router::loadAllRoutes($this);
    }

    protected function loadEnvironment(): void
    {

    }

    protected function bootOrm (): void
    {
        // $capsule = new Capsule();

        // $capsule->addConnection(Config::getDatabaseConfig());
        // $capsule->setAsGlobal();
        // $capsule->bootEloquent();
    }
}
