<?php

namespace App\Filters;

class InvoiceFilter extends ApiFilter
{
	protected $safeParams = [
		'customerId' => ['eq'],
		'amount' => ['eq', 'gt', 'lt', 'gte', 'lte'],
		'status' => ['eq', 'neq'],
		'billedDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],
		'paidDate' => ['eq', 'gt', 'lt', 'gte', 'lte'],

	];

	protected $columnMap = [
		'customerId' => 'customer_id',
		'billedDate' => 'billed_dated',
		'paidDate' => 'paid_dated',
	];

	protected $operatorMap = [
		'eq' => '=',
		'lt' => '<',
		'lte' => '<=',
		'gt' => '>',
		'gte' => '>=',
		'neq' => '!=',
	];
}
