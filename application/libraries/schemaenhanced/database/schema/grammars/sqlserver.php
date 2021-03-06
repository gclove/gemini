<?php namespace SchemaEnhanced\Database\Schema\Grammars;

class SQLServer extends \Laravel\Database\Schema\Grammars\SQLServer {

	/**
	 * Generate the data-type definition for a date
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_date(\Laravel\Fluent $column)
	{
		return 'DATE';
	}

	/**
	 * Generate the data-type definition for a time
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_time(\Laravel\Fluent $column)
	{
		return 'TIME';
	}

	/**
	 * Generate the data-type definition for a date-time
	 *
	 * @param  Fluent	$column
	 * @return string
	 */
	protected function type_datetime(\Laravel\Fluent $column)
	{
		return 'DATETIME';
	}
}