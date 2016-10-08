<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: The user config model.
 * File: PodelAPI/User.object.php
 * Depends: [NONE]
 */

namespace PodelAPI\Models;
require_once __DIR__ . '/BaseModel.object.php';

class User extends BaseModel
{
    /** @var  bool $moderator - Is the user a moderator? */
    protected $moderator;
    /** @var  enum $user_type - Student, pupil etc. (Currently null) */
    protected $user_type;
    /** @var  array $experiments - Beta features enabled for user. */
    protected $experiments;
    /** @var  array $followed_channels - The channels the user follows (BETA feature) */
    protected $followed_channels;
    /** @var  int $channels_follow_limit - The max amount of channels to follow. */
    protected $channels_follow_limit;
    protected $triple_feed_enabled;
    /** @var  bool $home_set - is the home set. Currently no option in-app? */
    protected $home_set;
    protected $home_name;
    /** @var  string $home_name - Auto generated, short alpha-numeric location name */
    protected $location;
    /** @var  int $karma - The users karma. */
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