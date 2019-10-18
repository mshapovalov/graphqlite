<?php

namespace TheCodingMachine\GraphQLite;


/**
 * A context class that should be passed to the Webonyx executor.
 */
interface ContextInterface
{
    /**
     * Returns the prefetch buffer associated to the field $field.
     * (the buffer is created on the fly if it does not exist yet).
     */
    public function getPrefetchBuffer(QueryField $field): PrefetchBuffer;
}