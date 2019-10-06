<?php
namespace App\Traits;

trait ModelScopes
{
	public function scopeActive($query)
	{
		return $query->where('active',true);
	}
}
?>