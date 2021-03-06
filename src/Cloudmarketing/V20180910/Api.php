<?php

namespace AlibabaCloud\Cloudmarketing\V20180910;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method DeleteCrowd deleteCrowd(array $options = [])
 * @method FetchCrowdDefine fetchCrowdDefine(array $options = [])
 * @method DeleteFile deleteFile(array $options = [])
 * @method UpdateCrowd updateCrowd(array $options = [])
 * @method ProcessAfterUploadFile processAfterUploadFile(array $options = [])
 * @method SyncCrowd syncCrowd(array $options = [])
 * @method DownloadUDReport downloadUDReport(array $options = [])
 * @method DownloadCrowd downloadCrowd(array $options = [])
 * @method FetchFileSchemaData fetchFileSchemaData(array $options = [])
 * @method FetchTag fetchTag(array $options = [])
 * @method UpdateCategory updateCategory(array $options = [])
 * @method DescribeAuthBrand describeAuthBrand(array $options = [])
 * @method FavoriteTag favoriteTag(array $options = [])
 * @method DescribeTag describeTag(array $options = [])
 * @method Auth2Brand auth2Brand(array $options = [])
 * @method AnalysisCrowd analysisCrowd(array $options = [])
 * @method FetchCrowd fetchCrowd(array $options = [])
 * @method DescribeCrowd describeCrowd(array $options = [])
 * @method CalCrowdScale calCrowdScale(array $options = [])
 * @method DefineCrowd defineCrowd(array $options = [])
 * @method DescribeCategory describeCategory(array $options = [])
 * @method DescribeFile describeFile(array $options = [])
 * @method DefineFileSchema defineFileSchema(array $options = [])
 * @method RequestUploadFile requestUploadFile(array $options = [])
 * @method ProcessAfterUpload processAfterUpload(array $options = [])
 * @method FetchFileSchema fetchFileSchema(array $options = [])
 * @method DescribeAuthChannelBrand describeAuthChannelBrand(array $options = [])
 * @method DescribeChannelBrand describeChannelBrand(array $options = [])
 * @method CreateCategory createCategory(array $options = [])
 * @method DescribeBrand describeBrand(array $options = [])
 * @method UpdateBrand updateBrand(array $options = [])
 * @method CreateBrand createBrand(array $options = [])
 * @method RedefineTag redefineTag(array $options = [])
 * @method DefineTag defineTag(array $options = [])
 */
class CloudmarketingApiResolver
{
    use ApiResolverTrait;
}

class V20180910Rpc extends Rpc
{
    /** @var string */
    public $product = 'cloudmarketing';

    /** @var string */
    public $version = '2018-09-10';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DeleteCrowd extends V20180910Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class FetchCrowdDefine extends V20180910Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DeleteFile extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class UpdateCrowd extends V20180910Rpc
{
}

/**
 * @method string getSrcFileName()
 * @method $this withSrcFileName($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 */
class ProcessAfterUploadFile extends V20180910Rpc
{
}

/**
 * @method string getOuterAccountNo()
 * @method $this withOuterAccountNo($value)
 * @method array getChannelBrands()
 * @method string getChannelType()
 * @method $this withChannelType($value)
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class SyncCrowd extends V20180910Rpc
{

    /**
     * @param array $channelBrands
     *
     * @return $this
     */
    public function withChannelBrands(array $channelBrands)
    {
        $this->data['ChannelBrands'] = $channelBrands;
        foreach ($channelBrands as $depth1 => $depth1Value) {
            $this->options['query']['ChannelBrands.' . ($depth1 + 1) . '.OuterBrandId'] = $depth1Value['OuterBrandId'];
            $this->options['query']['ChannelBrands.' . ($depth1 + 1) . '.OuterBrandName'] = $depth1Value['OuterBrandName'];
        }

        return $this;
    }
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DownloadUDReport extends V20180910Rpc
{
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class DownloadCrowd extends V20180910Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class FetchFileSchemaData extends V20180910Rpc
{
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 */
class FetchTag extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class UpdateCategory extends V20180910Rpc
{
}

/**
 * @method array getAccountIds()
 */
class DescribeAuthBrand extends V20180910Rpc
{

    /**
     * @param array $accountIds
     *
     * @return $this
     */
    public function withAccountIds(array $accountIds)
    {
        $this->data['AccountIds'] = $accountIds;
        foreach ($accountIds as $i => $iValue) {
            $this->options['query']['AccountIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method array getTagIds()
 * @method string getFavorite()
 * @method $this withFavorite($value)
 */
class FavoriteTag extends V20180910Rpc
{

    /**
     * @param array $tagIds
     *
     * @return $this
     */
    public function withTagIds(array $tagIds)
    {
        $this->data['TagIds'] = $tagIds;
        foreach ($tagIds as $i => $iValue) {
            $this->options['query']['TagIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getStatusList()
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIncludeChild()
 * @method $this withIncludeChild($value)
 * @method string getOnlyFavorite()
 * @method $this withOnlyFavorite($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DescribeTag extends V20180910Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
    public function withStatusList(array $statusList)
    {
        $this->data['StatusList'] = $statusList;
        foreach ($statusList as $i => $iValue) {
            $this->options['query']['StatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getBrandId()
 * @method $this withBrandId($value)
 * @method array getChannelBrandReqs()
 */
class Auth2Brand extends V20180910Rpc
{

    /**
     * @param array $channelBrandReqs
     *
     * @return $this
     */
    public function withChannelBrandReqs(array $channelBrandReqs)
    {
        $this->data['ChannelBrandReqs'] = $channelBrandReqs;
        foreach ($channelBrandReqs as $depth1 => $depth1Value) {
            $this->options['query']['ChannelBrandReqs.' . ($depth1 + 1) . '.ChannelType'] = $depth1Value['ChannelType'];
            foreach ($depth1Value['OuterBrandId'] as $i => $iValue) {
                $this->options['query']['ChannelBrandReqs.' . ($depth1 + 1) . '.OuterBrandId.' . ($i + 1)] = $iValue;
            }
        }

        return $this;
    }
}

/**
 * @method array getTagIds()
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class AnalysisCrowd extends V20180910Rpc
{

    /**
     * @param array $tagIds
     *
     * @return $this
     */
    public function withTagIds(array $tagIds)
    {
        $this->data['TagIds'] = $tagIds;
        foreach ($tagIds as $i => $iValue) {
            $this->options['query']['TagIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getCrowdId()
 * @method $this withCrowdId($value)
 */
class FetchCrowd extends V20180910Rpc
{
}

/**
 * @method string getSyncStatus()
 * @method $this withSyncStatus($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getCalStatus()
 * @method $this withCalStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class DescribeCrowd extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class CalCrowdScale extends V20180910Rpc
{
}

/**
 * @method string getRequestJsonData()
 * @method $this withRequestJsonData($value)
 */
class DefineCrowd extends V20180910Rpc
{
}

/**
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 */
class DescribeCategory extends V20180910Rpc
{
}

/**
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method array getDataSchemaStatusList()
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DescribeFile extends V20180910Rpc
{

    /**
     * @param array $dataSchemaStatusList
     *
     * @return $this
     */
    public function withDataSchemaStatusList(array $dataSchemaStatusList)
    {
        $this->data['DataSchemaStatusList'] = $dataSchemaStatusList;
        foreach ($dataSchemaStatusList as $i => $iValue) {
            $this->options['query']['DataSchemaStatusList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getFileColumns()
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DefineFileSchema extends V20180910Rpc
{

    /**
     * @param array $fileColumns
     *
     * @return $this
     */
    public function withFileColumns(array $fileColumns)
    {
        $this->data['FileColumns'] = $fileColumns;
        foreach ($fileColumns as $depth1 => $depth1Value) {
            $this->options['query']['FileColumns.' . ($depth1 + 1) . '.Head'] = $depth1Value['Head'];
            $this->options['query']['FileColumns.' . ($depth1 + 1) . '.DataType'] = $depth1Value['DataType'];
            $this->options['query']['FileColumns.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['FileColumns.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
            $this->options['query']['FileColumns.' . ($depth1 + 1) . '.ColumnType'] = $depth1Value['ColumnType'];
        }

        return $this;
    }
}

class RequestUploadFile extends V20180910Rpc
{
}

/**
 * @method string getSrcFileName()
 * @method $this withSrcFileName($value)
 * @method string getOssPath()
 * @method $this withOssPath($value)
 */
class ProcessAfterUpload extends V20180910Rpc
{
}

/**
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class FetchFileSchema extends V20180910Rpc
{
}

class DescribeAuthChannelBrand extends V20180910Rpc
{
}

class DescribeChannelBrand extends V20180910Rpc
{
}

/**
 * @method string getParentCategoryId()
 * @method $this withParentCategoryId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCategory extends V20180910Rpc
{
}

/**
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBrand extends V20180910Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class UpdateBrand extends V20180910Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDesc()
 * @method $this withDesc($value)
 */
class CreateBrand extends V20180910Rpc
{
}

/**
 * @method string getOptionType()
 * @method $this withOptionType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getColumnIndex()
 * @method $this withColumnIndex($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getTagDesc()
 * @method $this withTagDesc($value)
 * @method string getValidTime()
 * @method $this withValidTime($value)
 * @method array getOptionDefines()
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class RedefineTag extends V20180910Rpc
{

    /**
     * @param array $optionDefines
     *
     * @return $this
     */
    public function withOptionDefines(array $optionDefines)
    {
        $this->data['OptionDefines'] = $optionDefines;
        foreach ($optionDefines as $depth1 => $depth1Value) {
            $this->options['query']['OptionDefines.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['OptionDefines.' . ($depth1 + 1) . '.Define'] = $depth1Value['Define'];
            $this->options['query']['OptionDefines.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }
}

/**
 * @method string getOptionType()
 * @method $this withOptionType($value)
 * @method string getTagName()
 * @method $this withTagName($value)
 * @method string getColumnIndex()
 * @method $this withColumnIndex($value)
 * @method string getTagDesc()
 * @method $this withTagDesc($value)
 * @method string getValidTime()
 * @method $this withValidTime($value)
 * @method array getOptionDefines()
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class DefineTag extends V20180910Rpc
{

    /**
     * @param array $optionDefines
     *
     * @return $this
     */
    public function withOptionDefines(array $optionDefines)
    {
        $this->data['OptionDefines'] = $optionDefines;
        foreach ($optionDefines as $depth1 => $depth1Value) {
            $this->options['query']['OptionDefines.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['OptionDefines.' . ($depth1 + 1) . '.Define'] = $depth1Value['Define'];
            $this->options['query']['OptionDefines.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
        }

        return $this;
    }
}
