<?php
/**
 * Created by irworks on 08.10.16.
 * © Copyright irworks, 2016
 * All rights reserved. Do not destribute.
 */

/**
 * Module: The Jodel-Post model.
 * File: PodelAPI/Jodel.object.php
 * Depends: [NONE]
 */

namespace PodelAPI\Models;
require_once __DIR__ . '/BaseModel.object.php';

class Jodel extends BaseModel
{
    /** @var $post_id - The auto generated postId, seems like a hash. */
    protected $post_id;
    /** @var $discovered_by - Unsure about this one. Only seen as 0 so far. */
    protected $discovered_by;
    /** @var $message - The message, seems to be fixed as "Jodel" if this post is an photo. */
    protected $message;
    /**
     * @var $created_at - Creation date in the format (year-month-dayThours:minutes:seconds.millsZ)
     * @link https://de.wikipedia.org/wiki/ISO_8601
     */
    protected $created_at;
    /** @var  $updated_at - see $created_at */
    protected $updated_at;
    /** @var $pin_count int - how often was the jodel pinned */
    protected $pin_count;
    /** @var  $color - The HTML hexa-decimal color code for the box, without the leading '#' */
    protected $color;
    /** @var  $notifications_enabled bool - Do you have notifications enabled for this jodel */
    protected $notifications_enabled;
    /** @var  $post_own string - Seems to be a left over from tellM. Always "friend" if not yours, "own" if yours. */
    protected $post_own;
    /** @var  $discovered int - Unsure about this one. */
    protected $discovered;
    /** @var  $distance int - The distance, calculated on the server. If lower than x => close, or very close. */
    protected $distance;
    /** @var  $image_url - Image URL in full res. Only available if this is a photo-jodel */
    protected $image_url;
    /** @var  $image_headers - Amazon S3 (AWS) image headers. Only available if this is a photo-jodel */
    protected $image_headers;
    /** @var  $thumbnail_url - Image URL in lower res. Only available if this is a photo-jodel */
    protected $thumbnail_url;
    /** @var  $vote_count - The current rating. Including all down and up-votes. */
    protected $vote_count;
    /** @var  $location - The location object. See Location.class.php */
    protected $location;
    /** @var  $tags array - Seems to be a left over from tellM or a coming soon feature. */
    protected $tags;
    /** @var  $user_handle string - Hashed (SHA-1?) string, seems to depend on timestamp. Since the same poster never gets the same user_handle. */
    protected $user_handle;

    /**
     * @return mixed
     */
    public function getPostId() {
        return $this->post_id;
    }

    /**
     * @return mixed
     */
    public function getDiscoveredBy() {
        return $this->discovered_by;
    }

    /**
     * @return mixed
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt() {
        return $this->updated_at;
    }

    /**
     * @return int
     */
    public function getPinCount(): int {
        return $this->pin_count;
    }

    /**
     * @return mixed
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * @return boolean
     */
    public function isNotificationsEnabled(): bool {
        return $this->notifications_enabled;
    }

    /**
     * @return string
     */
    public function getPostOwn(): string {
        return $this->post_own;
    }

    /**
     * @return int
     */
    public function getDiscovered(): int {
        return $this->discovered;
    }

    /**
     * @return int
     */
    public function getDistance(): int {
        return $this->distance;
    }

    /**
     * @return mixed
     */
    public function getImageUrl() {
        return $this->image_url;
    }

    /**
     * @return mixed
     */
    public function getImageHeaders() {
        return $this->image_headers;
    }

    /**
     * @return mixed
     */
    public function getThumbnailUrl() {
        return $this->thumbnail_url;
    }

    /**
     * @return mixed
     */
    public function getVoteCount() {
        return $this->vote_count;
    }

    /**
     * @return mixed
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @return array
     */
    public function getTags(): array {
        return $this->tags;
    }

    /**
     * @return string
     */
    public function getUserHandle(): string {
        return $this->user_handle;
    }


}