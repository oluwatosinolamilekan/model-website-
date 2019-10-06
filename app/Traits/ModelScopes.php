<?php
namespace App\Traits;

trait ModelScopes
{
	public function scopeActive($query)
	{
		return $query->where('status',1);
	}

	public function scopeDeactive($query)
	{
		return $query->where('status',0);
	}
}
?>