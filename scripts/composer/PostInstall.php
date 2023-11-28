<?php

namespace DrupalProject\composer;

use Composer\Script\Event;

class PostInstall {

  public static function showMessage(Event $event) {
    $event->getIO()->write("Show message called successfully.");
  }
}

?>