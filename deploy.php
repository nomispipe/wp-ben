<?php

namespace Deployer;
require 'recipe/common.php';


// Config
set('repository', 'https://github.com/nomispipe/wp-ben');

set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);



// Hosts
host('5.75.141.248')
    ->set('remote_user', 'simon')
    ->set('deploy_path', '~/app');


// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);


after('deploy:failed', 'deploy:unlock');
