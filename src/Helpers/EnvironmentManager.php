<?php

namespace TNB\LaravelInstaller\Helpers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EnvironmentManager
{
    /**
     * @var string
     */
    private $envPath;

    /**
     * @var string
     */
    private $envExamplePath;

    /**
     * Set the .env and .env.example paths.
     */
    public function __construct()
    {
        $this->envPath = base_path('.env');
        $this->envExamplePath = base_path('.env.example');
    }

    /**
     * Get the content of the .env file.
     *
     * @return string
     */
    public function getEnvContent()
    {
        if (!file_exists($this->envPath)) {
            if (file_exists($this->envExamplePath)) {
                copy($this->envExamplePath, $this->envPath);
            } else {
                touch($this->envPath);
            }
        }

        return file_get_contents($this->envPath);
    }

    /**
     * Get the the .env file path.
     *
     * @return string
     */
    public function getEnvPath()
    {
        return $this->envPath;
    }

    /**
     * Get the the .env.example file path.
     *
     * @return string
     */
    public function getEnvExamplePath()
    {
        return $this->envExamplePath;
    }

    /**
     * Save the edited content to the .env file.
     *
     * @param Request $input
     * @return string
     */
    public function saveFileClassic(Request $input)
    {
        $message = trans('installer_messages.environment.success');

        try {
            file_put_contents($this->envPath, $input->get('envConfig'));
        } catch (Exception $e) {
            $message = trans('installer_messages.environment.errors');
        }

        return $message;
    }

    /**
     * Save the form content to the .env file.
     *
     * @param Request $request
     * @return string
     */
    public function saveFileWizard(Request $request)
    {
        $results = trans('installer_messages.environment.success');

        $envFileData = '';
        if ($request->has('app_name')) {
            $envFileData .= 'APP_NAME=\'' . $request->app_name . "'\n";
        }
        if ($request->has('environment')) {
            $envFileData .= 'APP_ENV=' . $request->environment . "\n";
        }
        $envFileData .= 'APP_KEY=' . 'base64:' . base64_encode(Str::random(32)) . "\n";
        if ($request->has('app_debug')) {
            $envFileData .= 'APP_DEBUG=' . $request->app_debug . "\n";
        }
        if ($request->has('app_url')) {
            $envFileData .= 'APP_URL=' . $request->app_url . "\n\n";
        }
        if ($request->has('admin_https')) {
            $envFileData .= 'ADMIN_HTTPS=' . $request->admin_https . "\n\n";
        }

        if ($request->has('log_channel')) {
            $envFileData .= 'LOG_CHANNEL=' . $request->log_channel . "\n";
        }
        if ($request->has('log_deprecations_channel')) {
            $envFileData .= 'LOG_DEPRECATIONS_CHANNEL=' . $request->log_deprecations_channel . "\n";
        }
        if ($request->has('log_level')) {
            $envFileData .= 'LOG_LEVEL=' . $request->log_level . "\n\n";
        }

        if ($request->has('database_connection')) {
            $envFileData .= 'DB_CONNECTION=' . $request->database_connection . "\n";
        }
        if ($request->has('database_hostname')) {
            $envFileData .= 'DB_HOST=' . $request->database_hostname . "\n";
        }
        if ($request->has('database_port')) {
            $envFileData .= 'DB_PORT=' . $request->database_port . "\n";
        }
        if ($request->has('database_name')) {
            $envFileData .= 'DB_DATABASE=' . $request->database_name . "\n";
        }
        if ($request->has('database_username')) {
            $envFileData .= 'DB_USERNAME=' . $request->database_username . "\n";
        }
        if ($request->has('database_password')) {
            $envFileData .= 'DB_PASSWORD=' . $request->database_password . "\n\n";
        }

        if ($request->has('broadcast_driver')) {
            $envFileData .= 'BROADCAST_DRIVER=' . $request->broadcast_driver . "\n";
        }
        if ($request->has('cache_driver')) {
            $envFileData .= 'CACHE_DRIVER=' . $request->cache_driver . "\n";
        }
        if ($request->has('filesystem_driver')) {
            $envFileData .= 'FILESYSTEM_DISK=' . $request->filesystem_driver . "\n";
        }
        if ($request->has('queue_connection')) {
            $envFileData .= 'QUEUE_CONNECTION=' . $request->queue_connection . "\n\n";
        }
        if ($request->has('session_driver')) {
            $envFileData .= 'SESSION_DRIVER=' . $request->session_driver . "\n";
        }
        if ($request->has('session_lifetime')) {
            $envFileData .= 'SESSION_LIFETIME=' . $request->session_lifetime . "\n\n";
        }

        if ($request->has('memcache_hostname')) {
            $envFileData .= 'MEMCACHED_HOST=' . $request->memcache_hostname . "\n";
        }
        if ($request->has('memcache_port')) {
            $envFileData .= 'MEMCACHED_PORT=' . $request->memcache_port . "\n\n";
        }

        if ($request->has('redis_hostname')) {
            $envFileData .= 'REDIS_HOST=' . $request->redis_hostname . "\n";
        }
        if ($request->has('redis_password')) {
            $envFileData .= 'REDIS_PASSWORD=' . $request->redis_password . "\n";
        }
        if ($request->has('redis_port')) {
            $envFileData .= 'REDIS_PORT=' . $request->redis_port . "\n\n";
        }
        if ($request->has('redis_db')) {
            $envFileData .= 'REDIS_DB=' . $request->redis_db . "\n\n";
        }

        if ($request->has('mail_mailer')) {
            $envFileData .= 'MAIL_MAILER=' . $request->mail_mailer . "\n";
        }
        if ($request->has('mail_host')) {
            $envFileData .= 'MAIL_HOST=' . $request->mail_host . "\n";
        }
        if ($request->has('mail_port')) {
            $envFileData .= 'MAIL_PORT=' . $request->mail_port . "\n";
        }
        if ($request->has('mail_username')) {
            $envFileData .= 'MAIL_USERNAME=' . $request->mail_username . "\n";
        }
        if ($request->has('mail_password')) {
            $envFileData .= 'MAIL_PASSWORD=' . $request->mail_password . "\n";
        }
        if ($request->has('mail_encryption')) {
            $envFileData .= 'MAIL_ENCRYPTION=' . $request->mail_encryption . "\n";
        }
        if ($request->has('mail_from_address')) {
            $envFileData .= 'MAIL_FROM_ADDRESS=' . $request->mail_from_address . "\n";
        }
        if ($request->has('mail_from_name')) {
            $envFileData .= 'MAIL_FROM_NAME=' . $request->mail_from_name . "\n\n";
        }

        if ($request->has('aws_access_key_id')) {
            $envFileData .= 'AWS_ACCESS_KEY_ID=' . $request->aws_access_key_id . "\n";
        }
        if ($request->has('aws_secret_access_key')) {
            $envFileData .= 'AWS_SECRET_ACCESS_KEY=' . $request->aws_secret_access_key . "\n";
        }
        if ($request->has('aws_default_region')) {
            $envFileData .= 'AWS_DEFAULT_REGION=' . $request->aws_default_region . "\n";
        }
        if ($request->has('aws_bucket')) {
            $envFileData .= 'AWS_BUCKET=' . $request->aws_bucket . "\n\n";
        }
        if ($request->has('aws_use_path_style_endpoint')) {
            $envFileData .= 'AWS_USE_PATH_STYLE_ENDPOINT=' . $request->aws_use_path_style_endpoint . "\n\n";
        }

        if ($request->has('pusher_app_id')) {
            $envFileData .= 'PUSHER_APP_ID=' . $request->pusher_app_id . "\n";
        }
        if ($request->has('pusher_app_key')) {
            $envFileData .= 'PUSHER_APP_KEY=' . $request->pusher_app_key . "\n";
        }
        if ($request->has('pusher_app_secret')) {
            $envFileData .= 'PUSHER_APP_SECRET=' . $request->pusher_app_secret . "\n";
        }
        if ($request->has('pusher_host')) {
            $envFileData .= 'PUSHER_HOST=' . $request->pusher_host . "\n";
        }
        if ($request->has('pusher_port')) {
            $envFileData .= 'PUSHER_PORT=' . $request->pusher_port . "\n";
        }
        if ($request->has('pusher_scheme')) {
            $envFileData .= 'PUSHER_SCHEME=' . $request->pusher_scheme . "\n";
        }
        if ($request->has('pusher_app_cluster')) {
            $envFileData .= 'PUSHER_APP_CLUSTER=' . $request->pusher_app_cluster . "\n\n";
        }

        $envFileData .= 'VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"' . "\n";
        $envFileData .= 'VITE_PUSHER_HOST="${PUSHER_HOST}"' . "\n";
        $envFileData .= 'VITE_PUSHER_PORT="${PUSHER_PORT}"' . "\n";
        $envFileData .= 'VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"' . "\n";
        $envFileData .= 'VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"' . "\n";

        try {
            file_put_contents($this->envPath, $envFileData);
        } catch (Exception $e) {
            $results = trans('installer_messages.environment.errors');
        }

        return $results;
    }
}
