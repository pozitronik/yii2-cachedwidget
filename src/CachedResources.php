<?php
declare(strict_types = 1);

namespace pozitronik\widgets;

use yii\base\Model;

/**
 * Class CachedResources
 * Simply describe all kinds of linked resources (js, css, etc)
 *
 * @property array $assetBundles
 * @property array $css
 * @property array $jsFiles
 * @property array $metaTags
 * @property array[] $js
 * @property array $linkTags
 * @property array $cssFiles
 */
class CachedResources extends Model {
	private array $_metaTags = [];
	private array $_linkTags = [];
	private array $_css = [];
	private array $_cssFiles = [];
	private array $_js = [];
	private array $_jsFiles = [];
	private array $_assetBundles = [];

	/**
	 * {@inheritDoc}
	 */
	public function rules():array {
		return [
			[['assetBundles', 'css', 'jsFiles', 'metaTags', 'js', 'linkTags', 'cssFiles'], 'safe']
		];
	}

	/**
	 * @return array
	 */
	public function getMetaTags():array {
		return $this->_metaTags;
	}

	/**
	 * @param array $metaTags
	 */
	public function setMetaTags(array $metaTags):void {
		$this->_metaTags = $metaTags;
	}

	/**
	 * @return array
	 */
	public function getLinkTags():array {
		return $this->_linkTags;
	}

	/**
	 * @param array $linkTags
	 */
	public function setLinkTags(array $linkTags):void {
		$this->_linkTags = $linkTags;
	}

	/**
	 * @return array
	 */
	public function getCss():array {
		return $this->_css;
	}

	/**
	 * @param array $css
	 */
	public function setCss(array $css):void {
		$this->_css = $css;
	}

	/**
	 * @return array
	 */
	public function getCssFiles():array {
		return $this->_cssFiles;
	}

	/**
	 * @param array $cssFiles
	 */
	public function setCssFiles(array $cssFiles):void {
		$this->_cssFiles = $cssFiles;
	}

	/**
	 * @return array
	 */
	public function getJs():array {
		return $this->_js;
	}

	/**
	 * @param array $js
	 */
	public function setJs(array $js):void {
		$this->_js = $js;
	}

	/**
	 * @return array
	 */
	public function getJsFiles():array {
		return $this->_jsFiles;
	}

	/**
	 * @param array $jsFiles
	 */
	public function setJsFiles(array $jsFiles):void {
		$this->_jsFiles = $jsFiles;
	}

	/**
	 * @return array
	 */
	public function getAssetBundles():array {
		return $this->_assetBundles;
	}

	/**
	 * @param array $assetBundles
	 */
	public function setAssetBundles(array $assetBundles):void {
		$this->_assetBundles = $assetBundles;
	}
}