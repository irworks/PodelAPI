<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: [INSERT]
 * File: PodelAPI/User.object.php
 * Depends: [NONE]
 */

namespace PodelAPI\Models;
require_once __DIR__ . '/BaseModel.object.php';

class User extends BaseModel
{
    protected $moderator;
    protected $user_type;
    protected $experiments;
    protected $followed_channels;
    protected $channels_follow_limit;
    protected $triple_feed_enabled;
    protected $home_set;
    protected $home_name;
    protected $location;
    protected $karma;

    /**
     * @return mixed
     */
    public function isModerator() : bool {
        return $this->moderator;
    }

    /**
     * @return mixed
     */
    public function getUserType() {
        return $this->user_type;
    }

    /**
     * @return mixed
     */
    public function getExperiments() {
        return $this->experiments;
    }

    /**
     * @return mixed
     */
    public function getFollowedChannels() {
        return $this->followed_channels;
    }

    /**
     * @return mixed
     */
    public function getChannelsFollowLimit() {
        return $this->channels_follow_limit;
    }

    /**
     * @return mixed
     */
    public function getTripleFeedEnabled() {
        return $this->triple_feed_enabled;
    }

    /**
     * @return mixed
     */
    public function getHomeSet() {
        return $this->home_set;
    }

    /**
     * @return mixed
     */
    public function getHomeName() {
        return $this->home_name;
    }

    /**
     * @return mixed
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @return int
     */
    public function getKarma() : int {
        return $this->karma;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location) {
        $this->location = $location;
    }

    /**
     * @param mixed $karma
     */
    public function setKarma($karma) {
        $this->karma = $karma;
    }
}