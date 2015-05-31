<?php

/*
 * This file is part of Cachet.
 *
 * (c) Cachet HQ <support@cachethq.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Events;

use CachetHQ\Cachet\Models\Incident;
use Illuminate\Queue\SerializesModels;

class MaintenanceHasReportedEvent extends AbstractEvent
{
    use SerializesModels;

    /**
     * The incident that has been reported.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    protected $incident;

    /**
     * Create a new maintenance has scheduled event instance.
     *
     * @return void
     */
    public function __construct(Incident $incident)
    {
        $this->incident = $incident;
    }

    /**
     * Get the incident reported.
     *
     * @var \CachetHQ\Cachet\Models\Incident
     */
    public function getIncident()
    {
        return $this->incident;
    }
}
