<?php 

namespace Tokenly\LaravelBlockingBeanstalkd;

use Illuminate\Queue\QueueServiceProvider;
use Tokenly\LaravelBlockingBeanstalkd\BlockingBeanstalkdConnector;

class BlockingBeanstalkServiceProvider extends QueueServiceProvider {


    public function registerConnectors($manager) {
        parent::registerConnectors($manager);

        // add the blocking beanstalkd connector
        $manager->addConnector('blockingbeanstalkd', function()
        {
            return new BlockingBeanstalkdConnector();
        });
    }



}
