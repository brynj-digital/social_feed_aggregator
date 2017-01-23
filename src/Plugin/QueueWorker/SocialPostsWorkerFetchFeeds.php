<?php

namespace Drupal\social_feed_aggregator\Plugin\QueueWorker;

/**
 * A report worker.
 *
 * @QueueWorker(
 *   id = "social_feed_aggregator_fetch_feeds",
 *   title = @Translation("Fetch social posts for social_feed_aggregator module"),
 *   cron = {"time" = 1}
 * )
 *
 * @see queue_example.module
 */
class SocialPostsWorkerFetchFeeds extends SocialPostsWorkerBase  {

  /**
   * {@inheritdoc}
   */
  public function processItem($data) {
    //
  }

}
