<?php

/**
 * @author Soma Szelpal <szelpalsoma@gmail.com>
 * @license MIT
 */

namespace ProEmergotech\Correlate\Monolog;

/**
 * Adds request identifier into records
 *
 * @package ProEmergotech\Correlate
 */
class CorrelateProcessor
{
    /**
     * @var string
     */
    protected $correlationId = '';

    /**
     * @var string
     */
    protected $paramName;

    /**
     * @param string $correlationId
     */
    public function __construct(string $paramName, $correlationId = null)
    {
        $this->paramName = $paramName;

        if ($correlationId !== null) {
            $this->correlationId = (string)$correlationId;
        }
    }

    /**
     * @param  array  $record
     * @return array
     */
    public function __invoke(array $record): array
    {
        if (!empty($this->correlationId)) {
            $record['context'][$this->paramName] = $this->correlationId;
        }

        return $record;
    }

    /**
     * @return string|null
     */
    public function getCorrelationId(): string
    {
        return $this->correlationId;
    }
}
