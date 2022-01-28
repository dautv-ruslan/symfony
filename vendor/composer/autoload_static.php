<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15578c50c7914719348d5023fadd9a54
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Flex\\' => 13,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Flex\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/flex/src',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Symfony\\Flex\\Cache' => __DIR__ . '/..' . '/symfony/flex/src/Cache.php',
        'Symfony\\Flex\\Command\\DumpEnvCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/DumpEnvCommand.php',
        'Symfony\\Flex\\Command\\GenerateIdCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/GenerateIdCommand.php',
        'Symfony\\Flex\\Command\\InstallRecipesCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/InstallRecipesCommand.php',
        'Symfony\\Flex\\Command\\RecipesCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/RecipesCommand.php',
        'Symfony\\Flex\\Command\\RemoveCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/RemoveCommand.php',
        'Symfony\\Flex\\Command\\RequireCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/RequireCommand.php',
        'Symfony\\Flex\\Command\\UnpackCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/UnpackCommand.php',
        'Symfony\\Flex\\Command\\UpdateCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/UpdateCommand.php',
        'Symfony\\Flex\\Command\\UpdateRecipesCommand' => __DIR__ . '/..' . '/symfony/flex/src/Command/UpdateRecipesCommand.php',
        'Symfony\\Flex\\ComposerRepository' => __DIR__ . '/..' . '/symfony/flex/src/ComposerRepository.php',
        'Symfony\\Flex\\Configurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator.php',
        'Symfony\\Flex\\Configurator\\AbstractConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/AbstractConfigurator.php',
        'Symfony\\Flex\\Configurator\\BundlesConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/BundlesConfigurator.php',
        'Symfony\\Flex\\Configurator\\ComposerScriptsConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/ComposerScriptsConfigurator.php',
        'Symfony\\Flex\\Configurator\\ContainerConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/ContainerConfigurator.php',
        'Symfony\\Flex\\Configurator\\CopyFromPackageConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/CopyFromPackageConfigurator.php',
        'Symfony\\Flex\\Configurator\\CopyFromRecipeConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/CopyFromRecipeConfigurator.php',
        'Symfony\\Flex\\Configurator\\DockerComposeConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/DockerComposeConfigurator.php',
        'Symfony\\Flex\\Configurator\\DockerfileConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/DockerfileConfigurator.php',
        'Symfony\\Flex\\Configurator\\EnvConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/EnvConfigurator.php',
        'Symfony\\Flex\\Configurator\\GitignoreConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/GitignoreConfigurator.php',
        'Symfony\\Flex\\Configurator\\MakefileConfigurator' => __DIR__ . '/..' . '/symfony/flex/src/Configurator/MakefileConfigurator.php',
        'Symfony\\Flex\\CurlDownloader' => __DIR__ . '/..' . '/symfony/flex/src/CurlDownloader.php',
        'Symfony\\Flex\\Downloader' => __DIR__ . '/..' . '/symfony/flex/src/Downloader.php',
        'Symfony\\Flex\\Event\\UpdateEvent' => __DIR__ . '/..' . '/symfony/flex/src/Event/UpdateEvent.php',
        'Symfony\\Flex\\Flex' => __DIR__ . '/..' . '/symfony/flex/src/Flex.php',
        'Symfony\\Flex\\GithubApi' => __DIR__ . '/..' . '/symfony/flex/src/GithubApi.php',
        'Symfony\\Flex\\InformationOperation' => __DIR__ . '/..' . '/symfony/flex/src/InformationOperation.php',
        'Symfony\\Flex\\Lock' => __DIR__ . '/..' . '/symfony/flex/src/Lock.php',
        'Symfony\\Flex\\Options' => __DIR__ . '/..' . '/symfony/flex/src/Options.php',
        'Symfony\\Flex\\PackageFilter' => __DIR__ . '/..' . '/symfony/flex/src/PackageFilter.php',
        'Symfony\\Flex\\PackageJsonSynchronizer' => __DIR__ . '/..' . '/symfony/flex/src/PackageJsonSynchronizer.php',
        'Symfony\\Flex\\PackageResolver' => __DIR__ . '/..' . '/symfony/flex/src/PackageResolver.php',
        'Symfony\\Flex\\ParallelDownloader' => __DIR__ . '/..' . '/symfony/flex/src/ParallelDownloader.php',
        'Symfony\\Flex\\Path' => __DIR__ . '/..' . '/symfony/flex/src/Path.php',
        'Symfony\\Flex\\Recipe' => __DIR__ . '/..' . '/symfony/flex/src/Recipe.php',
        'Symfony\\Flex\\Response' => __DIR__ . '/..' . '/symfony/flex/src/Response.php',
        'Symfony\\Flex\\ScriptExecutor' => __DIR__ . '/..' . '/symfony/flex/src/ScriptExecutor.php',
        'Symfony\\Flex\\SymfonyBundle' => __DIR__ . '/..' . '/symfony/flex/src/SymfonyBundle.php',
        'Symfony\\Flex\\TruncatedComposerRepository' => __DIR__ . '/..' . '/symfony/flex/src/TruncatedComposerRepository.php',
        'Symfony\\Flex\\Unpack\\Operation' => __DIR__ . '/..' . '/symfony/flex/src/Unpack/Operation.php',
        'Symfony\\Flex\\Unpack\\Result' => __DIR__ . '/..' . '/symfony/flex/src/Unpack/Result.php',
        'Symfony\\Flex\\Unpacker' => __DIR__ . '/..' . '/symfony/flex/src/Unpacker.php',
        'Symfony\\Flex\\Update\\DiffHelper' => __DIR__ . '/..' . '/symfony/flex/src/Update/DiffHelper.php',
        'Symfony\\Flex\\Update\\RecipePatch' => __DIR__ . '/..' . '/symfony/flex/src/Update/RecipePatch.php',
        'Symfony\\Flex\\Update\\RecipePatcher' => __DIR__ . '/..' . '/symfony/flex/src/Update/RecipePatcher.php',
        'Symfony\\Flex\\Update\\RecipeUpdate' => __DIR__ . '/..' . '/symfony/flex/src/Update/RecipeUpdate.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15578c50c7914719348d5023fadd9a54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15578c50c7914719348d5023fadd9a54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit15578c50c7914719348d5023fadd9a54::$classMap;

        }, null, ClassLoader::class);
    }
}
