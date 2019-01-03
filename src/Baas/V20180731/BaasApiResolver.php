<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Baas based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Baas\V20180731
 *
 * @method AcceptInvitation acceptInvitation(array $options = [])
 * @method ApplyBlockchain applyBlockchain(array $options = [])
 * @method BaasApiResolver baasApiResolver(array $options = [])
 * @method CheckConsortiumDomain checkConsortiumDomain(array $options = [])
 * @method CheckOrganizationDomain checkOrganizationDomain(array $options = [])
 * @method ConfirmConsortiumMember confirmConsortiumMember(array $options = [])
 * @method CreateBlockchainApplication createBlockchainApplication(array $options = [])
 * @method CreateBlockchainApply createBlockchainApply(array $options = [])
 * @method CreateChaincode createChaincode(array $options = [])
 * @method CreateChannel createChannel(array $options = [])
 * @method CreateChannelMember createChannelMember(array $options = [])
 * @method CreateConsortium createConsortium(array $options = [])
 * @method CreateConsortiumMember createConsortiumMember(array $options = [])
 * @method CreateEcosphere createEcosphere(array $options = [])
 * @method CreateOrganization createOrganization(array $options = [])
 * @method DeleteChaincode deleteChaincode(array $options = [])
 * @method DescribeApplies describeApplies(array $options = [])
 * @method DescribeBcSchema describeBcSchema(array $options = [])
 * @method DescribeBlock describeBlock(array $options = [])
 * @method DescribeBlockchainCreateTask describeBlockchainCreateTask(array $options = [])
 * @method DescribeBlockchainInfo describeBlockchainInfo(array $options = [])
 * @method DescribeBlockchainSchema describeBlockchainSchema(array $options = [])
 * @method DescribeCandidateOrganizations describeCandidateOrganizations(array $options = [])
 * @method DescribeChaincodeCollectionConfig describeChaincodeCollectionConfig(array $options = [])
 * @method DescribeChaincodeUploadPolicy describeChaincodeUploadPolicy(array $options = [])
 * @method DescribeChannelMembers describeChannelMembers(array $options = [])
 * @method DescribeConsortiumAdminStatus describeConsortiumAdminStatus(array $options = [])
 * @method DescribeConsortiumChaincodes describeConsortiumChaincodes(array $options = [])
 * @method DescribeConsortiumChannels describeConsortiumChannels(array $options = [])
 * @method DescribeConsortiumConfig describeConsortiumConfig(array $options = [])
 * @method DescribeConsortiumDeletable describeConsortiumDeletable(array $options = [])
 * @method DescribeConsortiumMemberApproval describeConsortiumMemberApproval(array $options = [])
 * @method DescribeConsortiumMembers describeConsortiumMembers(array $options = [])
 * @method DescribeConsortiumOrderers describeConsortiumOrderers(array $options = [])
 * @method DescribeConsortiumSpecs describeConsortiumSpecs(array $options = [])
 * @method DescribeConsortiums describeConsortiums(array $options = [])
 * @method DescribeEcosphereSpecs describeEcosphereSpecs(array $options = [])
 * @method DescribeEthereumDeletable describeEthereumDeletable(array $options = [])
 * @method DescribeEthereumNodeConfiguration describeEthereumNodeConfiguration(array $options = [])
 * @method DescribeExplorer describeExplorer(array $options = [])
 * @method DescribeInvitationCode describeInvitationCode(array $options = [])
 * @method DescribeInvitationList describeInvitationList(array $options = [])
 * @method DescribeInviter describeInviter(array $options = [])
 * @method DescribeMetric describeMetric(array $options = [])
 * @method DescribeMyBlockchains describeMyBlockchains(array $options = [])
 * @method DescribeMySuccessApplies describeMySuccessApplies(array $options = [])
 * @method DescribeMySuccessfulApplication describeMySuccessfulApplication(array $options = [])
 * @method DescribeOrdererLogs describeOrdererLogs(array $options = [])
 * @method DescribeOrganization describeOrganization(array $options = [])
 * @method DescribeOrganizationChaincodes describeOrganizationChaincodes(array $options = [])
 * @method DescribeOrganizationChannels describeOrganizationChannels(array $options = [])
 * @method DescribeOrganizationDeletable describeOrganizationDeletable(array $options = [])
 * @method DescribeOrganizationMembers describeOrganizationMembers(array $options = [])
 * @method DescribeOrganizationPeers describeOrganizationPeers(array $options = [])
 * @method DescribeOrganizationSpecs describeOrganizationSpecs(array $options = [])
 * @method DescribeOrganizationUserCerts describeOrganizationUserCerts(array $options = [])
 * @method DescribeOrganizationUsers describeOrganizationUsers(array $options = [])
 * @method DescribeOrganizations describeOrganizations(array $options = [])
 * @method DescribeOrgnaizationChaincodes describeOrgnaizationChaincodes(array $options = [])
 * @method DescribeOssProperties describeOssProperties(array $options = [])
 * @method DescribePeerLogs describePeerLogs(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeResourceType describeResourceType(array $options = [])
 * @method DescribeRootDomain describeRootDomain(array $options = [])
 * @method DescribeSchemaDetail describeSchemaDetail(array $options = [])
 * @method DescribeTasks describeTasks(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method DescribeTransaction describeTransaction(array $options = [])
 * @method DestroyConsortium destroyConsortium(array $options = [])
 * @method DestroyEthereum destroyEthereum(array $options = [])
 * @method DestroyOrganization destroyOrganization(array $options = [])
 * @method DownloadAll downloadAll(array $options = [])
 * @method DownloadBizview downloadBizview(array $options = [])
 * @method DownloadOrganizationSDK downloadOrganizationSDK(array $options = [])
 * @method DownloadSDK2 downloadSDK2(array $options = [])
 * @method DownloadSdk downloadSdk(array $options = [])
 * @method DownloadSignedData downloadSignedData(array $options = [])
 * @method GetApplies getApplies(array $options = [])
 * @method GetBcSchema getBcSchema(array $options = [])
 * @method GetBlockchainCreateTask getBlockchainCreateTask(array $options = [])
 * @method GetBlockchainInfo getBlockchainInfo(array $options = [])
 * @method GetMyBlockchains getMyBlockchains(array $options = [])
 * @method GetMySuccessApplies getMySuccessApplies(array $options = [])
 * @method GetOssProperties getOssProperties(array $options = [])
 * @method GetTemplates getTemplates(array $options = [])
 * @method InstallChaincode installChaincode(array $options = [])
 * @method InstantiateChaincode instantiateChaincode(array $options = [])
 * @method InviteUser inviteUser(array $options = [])
 * @method JoinChannel joinChannel(array $options = [])
 * @method OperateUser operateUser(array $options = [])
 * @method QueryBlock queryBlock(array $options = [])
 * @method QueryConsortiumDeletable queryConsortiumDeletable(array $options = [])
 * @method QueryEthereumDeletable queryEthereumDeletable(array $options = [])
 * @method QueryMetric queryMetric(array $options = [])
 * @method QueryOrganizationDeletable queryOrganizationDeletable(array $options = [])
 * @method QueryTransaction queryTransaction(array $options = [])
 * @method RejectUser rejectUser(array $options = [])
 * @method ResetCertificate resetCertificate(array $options = [])
 * @method ResetOrganizationUserPassword resetOrganizationUserPassword(array $options = [])
 * @method ResetUser resetUser(array $options = [])
 * @method SchemaDetail schemaDetail(array $options = [])
 * @method SynchronizeChaincode synchronizeChaincode(array $options = [])
 * @method UpdateSchema updateSchema(array $options = [])
 * @method UpgradeChaincode upgradeChaincode(array $options = [])
 */
class BaasApiResolver
{
    use ApiResolverTrait;
}