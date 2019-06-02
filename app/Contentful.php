<?php

namespace App;

use Contentful\Delivery\Client as DeliveryClient;
use Contentful\Delivery\Query as ClientQuery;

class Contentful
{
    private $client;

    public function __construct(DeliveryClient $client, ClientQuery $query)
    {
        $this->client = $client;
        $this->query = $query;
    }
    
    public function getContent($id) {
        $query = $this->query->setContentType($id)->orderBy('sys.createdAt',true);
        $entry = $this->client->getEntries($query);

        if (!$entry) {
            abort(404);
        }
        return $entry;
    }

    public function getEntries() {
        $entries = $this->client->getEntries();
        foreach($entries as $entry) {
            $entry->heroImageUrl = $entry->heroImage->getFile()->getUrl();
        }
        return $entries;
    }

    public function getNews($slug = null) {
        if ($slug == null){
            $news = $this->getContent('blogPost');
        }else {
            $query = $this->query->setContentType('blogPost')->where('fields.slug',$slug);
            $news = $this->client->getEntries($query);
        }
        foreach($news as $post) {
            $post->heroImageUrl = $post->heroImage->getFile()->getUrl();
        }
        return $news;
    }

}