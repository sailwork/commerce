<?php

namespace Sailwork\Commerce\Contracts\Channel;

use Sailwork\Commerce\Channel\Channel;

interface ChannelHandler
{
    public function get(int $id) : Channel;

    public function create(Channel $channel) : Channel;

    public function update(Channel $channel) : Channel;

    public function delete(int $id) : bool;
}
