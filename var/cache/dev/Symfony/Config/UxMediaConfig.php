<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UxMediaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $croppedPath;
    private $_usedProperties = [];

    /**
     * @default 'cropped/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function croppedPath($value): static
    {
        $this->_usedProperties['croppedPath'] = true;
        $this->croppedPath = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'ux_media';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('cropped_path', $value)) {
            $this->_usedProperties['croppedPath'] = true;
            $this->croppedPath = $value['cropped_path'];
            unset($value['cropped_path']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['croppedPath'])) {
            $output['cropped_path'] = $this->croppedPath;
        }

        return $output;
    }

}
