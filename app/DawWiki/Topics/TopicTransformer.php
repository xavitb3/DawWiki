<?php namespace DawWiki\Topics;

use DawWiki\Subjects\SubjectTransformer;
use DawWiki\Activities\ActivityTransformer;
use League\Fractal\TransformerAbstract;

class TopicTransformer extends TransformerAbstract
{
    protected $availableEmbeds = [
        'subject',
        'activities'
    ];

    /**
     * Turn this item object into a generic array
     *
     * @param Topic $topic
     * @return array
     */
    public function transform(Topic $topic)
    {
        return [
            'id'           => (int) $topic->id,
            'subject_id'   => (int) $topic->subject_id,
            'name'         => $topic->name
        ];
    }

    /**
     * Embed Place
     *
     * @return League\Fractal\Resource\Item
     */
    public function embedSubject(Topic $topic)
    {
        $subject = $topic->subject;

        return $this->item($subject, new SubjectTransformer);
    }

    public function embedActivities(Topic $topic)
    {
        $activities = $topic->activities;

        return $this->collection($activities, new ActivityTransformer);
    }
}