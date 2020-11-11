<?php

namespace App\Utils;

use App\Utils\Capitalize;
use App\Utils\SpacesDashes;
use App\Utils\Logger;

class Master
{
    private String $message = '';
    private Capitalize $capitalize;
    private SpacesDashes $spacesDashes;
    private Logger $logger;

    public function __construct(Capitalize $capitalize, SpacesDashes $spacesDashes, Logger $logger) {
        $this->capitalize = $capitalize;
        $this->spacesDashes = $spacesDashes;
        $this->logger = $logger;
    }

    public function transform(String $message) {
        $this->message = $this->capitalize->transform($this->message);
        return $this->message;
    }

    public function log() {
        $this->logger->log($this->message);
    }
}