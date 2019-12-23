<?php

class RoboFile extends Robo\Tasks
{
    public function publish($version)
    {
        $this->_exec("git tag $version");
        $this->_exec("git push");
        $this->_exec("git push --tags");
    }
}
