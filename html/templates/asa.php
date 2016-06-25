<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/asa.php
 *
 * asa template for UNetLab.
 *
 * LICENSE:
 *
 * This file is part of UNetLab (Unified Networking Lab).
 *
 * UNetLab is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * UNetLab is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with UNetLab. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Andrea Dainese <andrea.dainese@gmail.com>
 * @copyright 2014-2016 Andrea Dainese
 * @license http://www.gnu.org/licenses/gpl.html
 * @link http://www.unetlab.com/
 * @version 20151116
 */

$p['type'] = 'qemu';
$p['name'] = 'ASA';
$p['icon'] = 'ASA.png';
$p['cpu'] = 1;
$p['ram'] = 512;
$p['ethernet'] = 4;
$p['console'] = 'telnet';
$p['qemu_arch'] = 'i386';
$p['qemu_nic'] = 'i82559er';
$p['qemu_options'] = '-machine type=pc-1.0,accel=tcg -serial mon:stdio -nographic -nodefconfig -nodefaults -rtc base=utc -smbios type=1,product=asa5520 -icount 1';
?>
