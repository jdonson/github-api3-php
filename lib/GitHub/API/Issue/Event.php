<?php

namespace GitHub\API\Issue;

use GitHub\API\Api;
use GitHub\API\ApiException;
use GitHub\API\AuthenticationException;

/**
 * Issue event
 *
 * @link      http://developer.github.com/v3/issues/events/
 * @author    dsyph3r <d.syph.3r@gmail.com>
 */
class Event extends \GitHub\API\Event\Event
{
    /**
     * List events for repo
     *
     * Authentication Required: false|true
     *
     * @link http://developer.github.com/v3/issues/events/#list-events-for-an-issue
     *
     * @param   string  $username         GitHub username of repo owner
     * @param   string  $repo             Repo name
     * @param   int     $issueId          ID of issue
     * @return  array                     List of events
     */
    public function all($usename, $repo, $issueId)
    {
        return $this->_all("repos/$username/$repo/issues/$issueId/events");
    }
}
