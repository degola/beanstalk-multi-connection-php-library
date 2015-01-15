<?php

/**
 * Class Driver_StatsTubeResult
 *
 * allows access to stats-tube command to beanstalkd
 */
class Driver_StatsTubeResult extends Driver_Stats {
	public function __construct($data) {
		parent::__construct($data);
		if(!$this->validateData(array(
			'name',
			'current-jobs-urgent',
			'current-jobs-ready',
			'current-jobs-reserved',
			'current-jobs-delayed',
			'current-jobs-buried',
			'total-jobs',
			'current-using',
			'current-watching',
			'current-waiting',
			'cmd-delete',
			'cmd-pause-tube',
			'pause',
			'pause-time-left',
		), $this->data)) throw new Driver_StatsResultException('INVALID_FORMAT', array('Data' => $data));
	}
}

?>