<?php
namespace M6Web\Component\Firewall\Entry;

/**
 *
 * @author D3X73RR
 */
interface EntryInterface
{
    /**
     * Check in the template match the entry
     *
     * @param string $entry Template
     *
     * @return boolean
     */
    public static function match($entry);

    /**
     * Check if a string match the template
     *
     * @param string $entry
     *
     * @return boolean
     */
    public function check($entry);

    /**
     * Get all possible values in the list
     *
     * @return array
     */
    public function getMatchingEntries();
}