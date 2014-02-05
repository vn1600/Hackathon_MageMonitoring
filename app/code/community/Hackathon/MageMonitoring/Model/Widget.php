<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Hackathon
 * @package     Hackathon_MageMonitoring
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

interface Hackathon_MageMonitoring_Model_Widget
{
    /**
     * Returns id string, last part of classname in lower case to avoid possible conflicts.
     *
     * @return string
     */
    public function getId();
    /**
     * Returns true if this widget is active.
     *
     * return bool
     */
    public function isActive();
    /**
     * Returns widget name.
     *
     * @return string
    */
    public function getName();
    /**
     * Returns version string.
     *
     * @return string
    */
    public function getVersion();
    /**
     * Returns init state for collapseable the plugin is displayed in.
     *
     * return bool
     */
    public function displayCollapsed();
    /**
     * Returns output data as array.
     *
     * Format of return array:
     * array (array ( 'css_id' => 'info|success|warning|error',
     *                 'label' => $label,
     *                 'value' => $value
     *                 'chart' => false|array (see below),
     *        ...
     *        )
     *
     * Format of chart array:
     * array('chart_id' => 'unique_id',
     *         'chart_type' => 'Bar|Doughnut|Line|Pie|PolarArea|Radar',
     *         'canvas_width' => width in pixel as int,
     *         'canvas_height' => height in pixel as int,
     *         'chart_data' => array that matches chart type data structure spec at http://www.chartjs.org/docs/,
     *         'chart_options' => array that matches chart type chart options spec at http://www.chartjs.org/docs/,
     *         )
     *
     * @return array
     */
    public function getOutput();
    /**
     * Returns button data as array or false if this widget has no buttons.
     *
     * @return array|false
     */
    public function getButtons();
}