-- MySQL dump 10.13  Distrib 8.0.40, for Linux (x86_64)
--
-- Host: localhost    Database: xehrms
-- ------------------------------------------------------
-- Server version	8.0.40-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artificial_intelligence`
--

DROP TABLE IF EXISTS `artificial_intelligence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artificial_intelligence` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `Services_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Service_card_title_1` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Service_card_content_1` text COLLATE utf8mb4_bin,
  `Service_card_title_2` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Service_card_content_2` text COLLATE utf8mb4_bin,
  `S1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `S1_content` text COLLATE utf8mb4_bin,
  `S2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `S2_content` text COLLATE utf8mb4_bin,
  `S3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `S3_content` text COLLATE utf8mb4_bin,
  `workpress_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workpress_content` text COLLATE utf8mb4_bin,
  `solution_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `solution_content` text COLLATE utf8mb4_bin,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Inquary_content` text COLLATE utf8mb4_bin,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artificial_intelligence`
--

LOCK TABLES `artificial_intelligence` WRITE;
/*!40000 ALTER TABLE `artificial_intelligence` DISABLE KEYS */;
INSERT INTO `artificial_intelligence` VALUES (1,'I’m Gorgia. Magical AI for solution','Neural Nest, LLC delivered blazing fast, striking ai solution','20','Human labor hours saved\r\nwith help of AI','1.3','Generated revenue by\r\nAI Solutions','15','Saved operational costs\r\ndue to AI','Our experties field','Predictive Analytics','Convert data noise to intelligent insights for competitive differentiation.','Data Engineers','Stay ahead of disruption & exceed customer expectation by implementing predictive analytics solutions.','Deep Learning','Access tools for deep learning, cloud computing and any scale.','Data Mining','You can discover hidden opportunities collecting, analyzing or explaining your data in a different way.','Statistical Modeling','Offer future-ready business applications that can learn & adjust with time.','World best AI for your business','AI technology is perfect for best business solutions & we offer help to achieve your goals.\r\n\r\nVarious analysis options.\r\nPage Load (time, size, number of requests).\r\nBig data analysis.\r\nAdvance Data analysis operation.','Why you should choose us?','Tell us about your product and we will give you expert assistance.','Work Inquiry','Having Any Query! Book an appointment.',NULL,'2024-12-23 12:34:18');
/*!40000 ALTER TABLE `artificial_intelligence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `content` text COLLATE utf8mb4_bin,
  `image` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business_analytics`
--

DROP TABLE IF EXISTS `business_analytics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `business_analytics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `b_sub_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_sub_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `sub_heading_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_content` text COLLATE utf8mb4_bin,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business_analytics`
--

LOCK TABLES `business_analytics` WRITE;
/*!40000 ALTER TABLE `business_analytics` DISABLE KEYS */;
INSERT INTO `business_analytics` VALUES (1,'Business Intelligence and Analytics','Transform your data into actionable insights with our business intelligence solutions. We provide comprehensive analytics services, including data visualization, reporting, and dashboards, to empower informed business strategies.','Let me provide a comprehensive breakdown of Business Intelligence (BI) and Analytics.','Data Architecture Design encompasses the comprehensive framework for managing an organization\'s data assets. Here\'s a detailed analysis:','Core Components of Modern BI:','Data Collection and Integration:\r\nAutomated data gathering from multiple sources\r\nReal-time data streaming capabilities\r\nData quality management and validation\r\nETL/ELT process optimization\r\nData warehouse/lake integration\r\nAnalysis Capabilities:\r\nDescriptive analytics (what happened)\r\nDiagnostic analytics (why it happened)\r\nPredictive analytics (what might happen)\r\nPrescriptive analytics (what should be done)\r\nStatistical analysis and modeling\r\nVisualization and Reporting:\r\nInteractive dashboards\r\nCustomizable reports\r\nSelf-service analytics tools\r\nData storytelling features\r\nMobile-friendly interfaces\r\nImplementation Framework:\r\nStrategy Development: Define business objectives, Identify key performance indicators (KPIs), Set measurement criteria, Establish governance policies, Create roadmap for implementation.\r\nData Architecture: Source system identification, Data modeling and design, Storage solution selection, Integration pattern definition, Security implementation\r\nTool Selection and Development: BI platform evaluation, Custom solution development, Integration with existing systems, User interface design, Mobile accessibility\r\nAnalysis Methods: Historical trend analysis, Comparative analysis, Variance analysis, Correlation studies, Forecasting models\r\nAnalysis Capabilities:\r\nDescriptive analytics (what happened)\r\nDiagnostic analytics (why it happened)\r\nPredictive analytics (what might happen)\r\nPrescriptive analytics (what should be done)\r\nStatistical analysis and modeling\r\n','Key Business Applications:','Financial Analytics:\r\nRevenue analysis\r\nCost optimization\r\nProfitability tracking\r\nBudget forecasting\r\nRisk assessment\r\nCustomer Analytics:\r\nBehavior analysis\r\nSegmentation\r\nLifetime value calculation\r\nChurn prediction\r\nSatisfaction measurement\r\nOperational Analytics:\r\nProcess efficiency\r\nResource utilization\r\nQuality metrics\r\nSupply chain optimization\r\nCapacity planning\r\nMarketing Analytics:\r\nCampaign performance\r\nChannel effectiveness\r\nROI measurement\r\nCustomer journey analysis\r\nMarket basket analysis','Best Practices:','Data Governance:\r\nData quality standards\r\nAccess control policies\r\nPrivacy compliance\r\nDocumentation requirements\r\nChange management procedures\r\nUser Adoption:\r\nTraining programs\r\nSupport systems\r\nUser feedback loops\r\nChange management\r\nPerformance monitoring\r\nTechnical Optimization:\r\nQuery performance\r\nCache management\r\nResource allocation\r\nScaling strategies\r\nBackup procedures','Emerging Trends: Advanced Analytics\r\n','Machine learning integration\r\nNatural language processing\r\nAutomated insights\r\nReal-time analytics\r\nEmbedded analytics','Emerging Trends: Data Democratization','Self-service capabilities\r\nCollaborative features\r\nKnowledge sharing\r\nCitizen data scientist enablement\r\nAutomated reporting','Responsible AI and Ethical Analytics','Bias Detection and Mitigation: Developing systems to identify and reduce biases in data and algorithms.\r\nExplainability: Ensuring AI models provide transparent and understandable results.\r\nCompliance: Adhering to global data privacy and AI governance standards.\r\nSustainability: Leveraging analytics and AI for environmentally responsible decision-making.','Would you like me to delve deeper into any particular aspect of Business Intelligence and Analytics ?','Would you like me to delve deeper into any particular aspect of Business Intelligence and Analytics ?','Learn content by interacting with an expert lesson or watching a video.\r\nPractice what you learned on realistic SAT test questions.\r\nReview your practice questions and learn how to improve.','Having any Query? Book an appointment.\r\n',NULL,'2024-12-26 11:02:23');
/*!40000 ALTER TABLE `business_analytics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cloud_computing`
--

DROP TABLE IF EXISTS `cloud_computing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cloud_computing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `b_sub_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_sub_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `sub_heading_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_content` text COLLATE utf8mb4_bin,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cloud_computing`
--

LOCK TABLES `cloud_computing` WRITE;
/*!40000 ALTER TABLE `cloud_computing` DISABLE KEYS */;
INSERT INTO `cloud_computing` VALUES (1,'Cloud Computing and Big Data Solutions','Leverage the power of cloud computing and big data technologies to scale your operations and manage large datasets effectively. We offer cloud strategy, migration, and management services to maximize your data\'s potential.','Let me provide a comprehensive overview of Cloud Computing and Big Data Solutions.','Cloud computing and big data solutions enable scalable storage, processing, and analysis of vast datasets. They enhance decision-making, drive innovation, and optimize business performance effectively.','Core Cloud Infrastructure:','Service Models:\r\nInfrastructure as a Service (IaaS)\r\nPlatform as a Service (PaaS)\r\nSoftware as a Service (SaaS)\r\nFunction as a Service (FaaS)\r\nData as a Service (DaaS)\r\nDeployment Models:\r\nPublic cloud\r\nPrivate cloud\r\nHybrid cloud\r\nMulti-cloud\r\nEdge computing\r\nKey Components:\r\nCompute resources\r\nStorage solutions\r\nNetworking infrastructure\r\nSecurity services\r\nManagement tools','Big Data Architecture:','Data Processing:\r\nBatch processing\r\nStream processing\r\nReal-time analytics\r\nDistributed computing\r\nParallel processing\r\nStorage Solutions:\r\nData lakes\r\nData warehouses\r\nNoSQL databases\r\nObject storage\r\nTime-series databases','Implementation Framework:','Planning Phase:\r\nRequirements analysis\r\nArchitecture design Capacity planning Cost estimation Risk assessment\r\nMigration Strategy:\r\nData migration planning\r\nApplication modernization\r\nNetwork optimization\r\nSecurity implementation\r\nPerformance monitoring\r\nOperational Management:\r\nResource optimization\r\nCost management\r\nPerformance tuning\r\nSecurity maintenance\r\nDisaster recovery','Key Technologies:','Processing Frameworks:\r\nApache Hadoop\r\nApache Spark\r\nApache Flink\r\nApache Kafka\r\nApache Storm\r\nStorage Technologies:\r\nAmazon S3\r\nAzure Blob Storage\r\nGoogle Cloud Storage\r\nHDFS\r\nDistributed databases\r\nAnalytics Tools:\r\nElasticsearch\r\nTableau\r\nPower BI\r\nLooker','Best Practices:','Architecture Design:\r\nScalability planning\r\nHigh availability\r\nFault tolerance\r\nData redundancy\r\nPerformance optimization\r\nSecurity Implementation:\r\nIdentity management\r\nAccess control\r\nData encryption\r\nNetwork security\r\nCompliance monitoring\r\nCost Optimization:\r\nResource right-sizing\r\nAuto-scaling\r\nReserved instances\r\nSpot instances\r\nBudget monitoring\r\n','Advanced Features:','AI/ML Integration:\r\nMachine learning platforms\r\nDeep learning frameworks\r\nModel deployment\r\nAutoML capabilities\r\nMLOps integration\r\nDevOps Practices:\r\nInfrastructure as Code\r\nContinuous Integration/Deployment\r\nAutomated testing\r\nMonitoring and logging\r\nConfiguration management','Would you like me to elaborate on any specific aspect of Cloud Computing and Big Data Solutions ?','Why choose us for your business.','Learn content by interacting with an expert lesson or watching a video.\r\nPractice what you learned on realistic SAT test questions.\r\nReview your practice questions and learn how to improve.','Having any Query? Book an appointment.',NULL,'2024-12-26 18:06:19');
/*!40000 ALTER TABLE `cloud_computing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_us` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `address_content` text COLLATE utf8mb4_bin,
  `contact_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `contact_content` text COLLATE utf8mb4_bin,
  `support_title` text COLLATE utf8mb4_bin,
  `support_content` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `message_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `message_content` text COLLATE utf8mb4_bin,
  `message_sub_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES (1,'Our Address','4642 Sierra Tree Ln\r\nIrvine, California, 92612','Contact Info','Open a chat or give us call at\r\n9494827797\r\nMon - Fri: 09.00 to 17.00','Live Support','Send An Email\r\nsupport@neuralnest.net\r\nsales@neuralnest.net','Get in Touch with Neural Nest, LLC','At Neural Nest LLC, we’re dedicated to empowering businesses with innovative AI-driven solutions. Whether you have questions, need assistance, or want to explore how our cutting-edge technologies can help you achieve your goals, we’re here for you. Feel free to reach out via the contact form below, or connect with us directly through email or phone. We value every opportunity to collaborate and are excited to hear from you.','Let’s Build Smarter Solutions Together!','Having any Query? Book an appointment.',NULL,'2024-12-27 17:49:07');
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_architecture`
--

DROP TABLE IF EXISTS `data_architecture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_architecture` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `b_sub_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_sub_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `sub_heading_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_content` text COLLATE utf8mb4_bin,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_architecture`
--

LOCK TABLES `data_architecture` WRITE;
/*!40000 ALTER TABLE `data_architecture` DISABLE KEYS */;
INSERT INTO `data_architecture` VALUES (1,'Data Architecture Design and Implementation','Tailor and deploy robust data architectures that align with your business objectives, ensuring scalability, security, and compliance. Our approach optimizes data flow and storage for efficient access and analysis.','Let me break down Data Architecture Design and Implementation comprehensively.\r\n\r\n','Data Architecture Design encompasses the comprehensive framework for managing an organization\'s data assets. Here\'s a detailed analysis:','Core Components','Data Sources: Internal systems, external feeds, IoT devices, user interactions.\r\nStorage Solutions: Data warehouses, data lakes, operational databases.\r\nProcessing Layers: ETL pipelines, stream processing, batch processing.\r\nAccess Patterns: APIs, query interfaces, real-time subscriptions.\r\nSecurity Framework: Encryption, access control, audit logging.\r\n','Key Design Principles\r\n','Data Governance:\r\nClear ownership and stewardship\r\nConsistent metadata management\r\nData quality standards\r\nCompliance requirements (GDPR, CCPA, etc.)\r\nLifecycle management policies\r\nScalability:\r\nHorizontal and vertical scaling capabilities\r\nDistributed processing support\r\nLoad balancing strategies\r\nResource optimization\r\nData Integration:\r\nMaster Data Management (MDM)\r\nData synchronization patterns\r\nChange data capture mechanisms\r\nError handling and recovery\r\nPerformance Optimization:\r\nCaching strategies\r\nQuery optimization\r\nIndexing patterns\r\nPartitioning schemes\r\n','Implementation Approach','Assessment Phase:\r\nBusiness requirements gathering\r\nCurrent state analysis\r\nTechnology stack evaluation\r\nCapacity planning\r\nRisk assessment\r\nDesign Phase:\r\nLogical data model development\r\nPhysical schema design\r\nSecurity architecture\r\nIntegration patterns\r\nBackup and recovery planning\r\nDevelopment:\r\nDatabase implementation\r\nETL pipeline creation\r\nAPI development\r\nMonitoring setup\r\nSecurity controls implementation\r\nTesting and Validation:\r\nData quality verification\r\nPerformance testing\r\nSecurity audits\r\nIntegration testing\r\nDisaster recovery drills\r\nDeployment and Operations:\r\nPhased rollout strategy\r\nOperational documentation\r\nTraining and handover\r\nMonitoring and alerting\r\nContinuous improvement','Data Mesh','Domain-driven ownership\r\nData as a product\r\nSelf-serve infrastructure\r\nFederated governance','Lambda Architecture','Batch layer for comprehensive processing\r\nSpeed layer for real-time analysis\r\nServing layer for query optimization','Kappa Architecture','Stream processing as primary paradigm\r\nReal-time data processing\r\nSimplified maintenance\r\n','Would you like me to elaborate on any specific aspect of data architecture design or implementation ?','Why choose us for your business.','Learn content by interacting with an expert lesson or watching a video.\r\nPractice what you learned on realistic SAT test questions.\r\nReview your practice questions and learn how to improve.','Having any Query? Book an appointment.',NULL,'2024-12-26 07:32:21');
/*!40000 ALTER TABLE `data_architecture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_governance`
--

DROP TABLE IF EXISTS `data_governance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_governance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `b_sub_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_sub_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `sub_heading_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_content` text COLLATE utf8mb4_bin,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_governance`
--

LOCK TABLES `data_governance` WRITE;
/*!40000 ALTER TABLE `data_governance` DISABLE KEYS */;
INSERT INTO `data_governance` VALUES (1,'Data Governance and Compliance 1','Ensure your data is managed responsibly with our data governance services. We help you establish policies and practices that maintain data quality, security, and compliance with relevant regulations.','Let me provide a detailed breakdown of Data Governance and Compliance frameworks.','Data Architecture Design encompasses the comprehensive framework for managing an organization\'s data assets. Here\'s a detailed analysis:','Core Components:','Governance Framework:\r\nPolicy development and enforcement\r\nStandards and procedures\r\nRole definitions and responsibilities\r\nDecision rights and accountabilities\r\nQuality management systems\r\nData Quality Management:\r\nData profiling and assessment\r\nQuality metrics and monitoring\r\nCleansing procedures\r\nValidation rules\r\nError handling protocols\r\nSecurity Controls:\r\nAccess management\r\nEncryption standards\r\nAuthentication protocols\r\nAudit logging\r\nIncident response procedures','Compliance Requirements:','Regulatory Standards:\r\nGDPR (General Data Protection Regulation)\r\nCCPA (California Consumer Privacy Act)\r\nHIPAA (Healthcare)\r\nSOX (Financial)\r\nIndustry-specific regulations\r\nPrivacy Management:\r\nData subject rights\r\nConsent management\r\nPrivacy impact assessments\r\nData protection measures\r\nCross-border data transfers','Implementation Strategy:','Assessment Phase:\r\nCurrent state analysis\r\nGap identification\r\nRisk assessment\r\nCompliance audit\r\nResource evaluation\r\nDesign Phase:\r\nPolicy framework development\r\nProcess mapping\r\nControl design\r\nTechnology requirements\r\nTraining program development\r\nImplementation:\r\nPolicy rollout\r\nProcess implementation\r\nTool deployment\r\nTraining execution\r\nMonitoring setup\r\nMaintenance:\r\nRegular audits\r\nPolicy updates\r\nCompliance monitoring\r\nPerformance tracking\r\nContinuous improvement','Key Processes:','Data Lifecycle Management:\r\nCreation/acquisition\r\nStorage and maintenance\r\nUsage and sharing\r\nArchival\r\nDisposal\r\nMetadata Management:\r\nBusiness metadata\r\nTechnical metadata\r\nOperational metadata\r\nReference data\r\nMaster data\r\nRisk Management:\r\nRisk identification\r\nAssessment methods\r\nMitigation strategies\r\nMonitoring procedures\r\nIncident response','Best Practices:','Documentation:\r\nPolicy documentation\r\nProcedure manuals\r\nTraining materials\r\nAudit trails\r\nCompliance records\r\nTraining and Awareness:\r\nRole-based training\r\nRegular updates\r\nAwareness programs\r\nCertification tracking\r\nPerformance measurement\r\nMonitoring and Reporting:\r\nCompliance dashboards\r\nAudit reports\r\nPerformance metrics\r\nIncident tracking\r\nExecutive reporting','Emerging Trends:','Automation:\r\nAutomated compliance checking\r\nAI-powered monitoring\r\nSmart contract implementation\r\nAutomated reporting\r\nPredictive compliance\r\nPrivacy Enhancement:\r\nPrivacy by design\r\nData minimization\r\nPurpose limitation\r\nStorage optimization\r\nRights management','Would you like me to elaborate on any specific aspect of Data Governance and Compliance ?','Why choose us for your business.','Learn content by interacting with an expert lesson or watching a video.\r\nPractice what you learned on realistic SAT test questions.\r\nReview your practice questions and learn how to improve.','Having any Query? Book an appointment.',NULL,'2024-12-26 18:02:11');
/*!40000 ALTER TABLE `data_governance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_science`
--

DROP TABLE IF EXISTS `data_science`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_science` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `services_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `services_content` text COLLATE utf8mb4_bin,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `s4_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s4_content` text COLLATE utf8mb4_bin,
  `conent_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `content_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `workprocess_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_content` text COLLATE utf8mb4_bin,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_science`
--

LOCK TABLES `data_science` WRITE;
/*!40000 ALTER TABLE `data_science` DISABLE KEYS */;
INSERT INTO `data_science` VALUES (1,'Ai & Data Machine deep Learning','Neural Nest, LLC delivered blazing fast, striking AI solution','Our Expertise field','Neural Nest, LLC is data science, machine learning & artificial intelligence.','Data Development','Involves designing, building, and managing data systems to store, process, and analyze information effectively.','Big Data Consulting','Helps businesses analyze, manage, and leverage large datasets to gain insights, optimize processes, and make data-driven decisions.','Data Machine Learning','Machine learning uses data and algorithms to identify patterns and make predictions or decisions.','Data Analytics and Visualization','Data analytics and visualization transform raw data into insights using charts, graphs, and dashboards.','We offer Real-time Data Solutions','Neural Nest, LLC is data science, machine learning and artificial intelligence provide business solution.\r\n\r\nVarious analysis options.\r\nPage Load (time, size, number of requests).\r\nBig data analysis.','20','Human labor hours saved \r\nwith help of AI','1.3','Generated revenue by\r\nAI Solutions','15','Saved operational costs\r\ndue to AI','Let’s see how do we works','Neural Nest, LLC is data science, machine learning and artificial intelligence provide business solution and delivered blazing fast, striking result.',NULL,'2024-12-25 17:59:09');
/*!40000 ALTER TABLE `data_science` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `demo_requests`
--

DROP TABLE IF EXISTS `demo_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `demo_requests` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `demo_date` date NOT NULL,
  `demo_time` time NOT NULL,
  `notes` text COLLATE utf8mb4_bin,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `demo_requests`
--

LOCK TABLES `demo_requests` WRITE;
/*!40000 ALTER TABLE `demo_requests` DISABLE KEYS */;
INSERT INTO `demo_requests` VALUES (1,'Mrinmoy Roy','sanghrana93@gmail.com','Neural Nest','2024-12-18','17:40:00','','2024-12-16 11:09:08'),(2,'Mrinmoy Roy','sanghrana93@gmail.com','Neural Nest','2024-12-18','17:40:00','Test Data','2024-12-16 11:09:22'),(3,'Mrinmoy Roy 2','sanghrana93@gmail.com','Neural Nest','2024-12-18','17:40:00','Test Data','2024-12-16 11:11:26'),(4,'Mrinmoy Roy 3','sanghrana93@gmail.com','Neural Nest','2024-12-18','17:40:00','Test Data','2024-12-16 11:17:28'),(5,'Mrinmoy Roy 4','sanghrana93@gmail.com','Neural Nest','2024-12-18','17:40:00','Test Data','2024-12-16 11:19:37'),(6,'Subhamay Sur','abc@gmail.com','xyz','2024-12-17','16:45:00','Test 2','2024-12-16 18:12:59'),(7,'Saurabh Thakur','sanghrana93@gmail.com','abc Company','2024-12-18','18:17:00','Test meeting','2024-12-17 09:44:20');
/*!40000 ALTER TABLE `demo_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `machine_learning`
--

DROP TABLE IF EXISTS `machine_learning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `machine_learning` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `services_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `s4_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s4_content` text COLLATE utf8mb4_bin,
  `solution_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `solution_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `approach_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `approach_card_title_1` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `approach_card_title_2` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `approach_card_title_3` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workingskills_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workingskills_content` text COLLATE utf8mb4_bin,
  `progress_title_1` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `progress_content_1` text COLLATE utf8mb4_bin,
  `progress_title_2` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `progress_content_2` text COLLATE utf8mb4_bin,
  `progress_title_3` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `progress_content_3` text COLLATE utf8mb4_bin,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `machine_learning`
--

LOCK TABLES `machine_learning` WRITE;
/*!40000 ALTER TABLE `machine_learning` DISABLE KEYS */;
INSERT INTO `machine_learning` VALUES (1,'Analysis & Deep Machine Learning with ai.','Welcome to AI Superior - we are a German based AI Solution provider.','What we offer? Let’s check it out.','Video Intelligence','It is uses AI to analyze video content, recognizing objects, scenes, and activities.','Machine Learning','It is a branch of AI that enables systems to learn patterns from data and make predictions.','Voice Tracking','Voice tracking leverages AI to analyze and monitor voice patterns, identifying speech, emotions, and speaker identity.','Data Analysis','It is the process of inspecting, cleaning, and interpreting data to discover useful insights and trends.','Provides Realtime Data Solutions.','AI technology is perfect for best business solutions & we offer help to achieve your goals.\r\n\r\nVarious analysis options.\r\nPage Load (time, size, number of requests).\r\nAdance Data analysis operation.','20','Human labor hours saved\r\nwith help of AI','1.3','Generated revenue by\r\nAI Solutions','15','Saved operational costs\r\ndue to AI','How Neural Nest, LLC works','Identify the probelm\r\nwith ai.','Collect data with our\r\nadvance ai','Deliver Accurate data\r\nsolution.','Working skills.','You’ve pored over your customers’ input. You’ve fleshed out your idea – and it’s taking real form! You know it satisfied a real need in your market,','Data Consulting','63','Big Data & AI','92','Predictive Analysis','78',NULL,'2024-12-24 07:13:18');
/*!40000 ALTER TABLE `machine_learning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_history`
--

DROP TABLE IF EXISTS `medical_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medical_history` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `date_of_visit` date NOT NULL,
  `temperature` float NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `blood_pressure` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `allergies` text COLLATE utf8mb4_general_ci,
  `medications` text COLLATE utf8mb4_general_ci,
  `diagnosis` text COLLATE utf8mb4_general_ci,
  `prescription_pdf` text COLLATE utf8mb4_general_ci,
  `blood_sugar` float NOT NULL,
  `notes` text COLLATE utf8mb4_general_ci,
  `createdDtm` text COLLATE utf8mb4_general_ci,
  `createdBy` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  CONSTRAINT `medical_history_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_history`
--

LOCK TABLES `medical_history` WRITE;
/*!40000 ALTER TABLE `medical_history` DISABLE KEYS */;
INSERT INTO `medical_history` VALUES (12,12,'2024-09-05',90,170,80,'120/80','fxhb','bfghb','bfgnhjg','uploads/prescriptions/96487c7023750ee131e86772f6d7bbead36732af11f76802b29403aee503db99_encrypt_signedFinal.pdf',70,'bjnfjg','2024-09-30 12:57:24','9');
/*!40000 ALTER TABLE `medical_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_contents`
--

DROP TABLE IF EXISTS `menu_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_contents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu_id` int DEFAULT NULL,
  `submenu_id` int DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_content` text,
  `card1_title` varchar(255) DEFAULT NULL,
  `card1_content` text,
  `card2_title` varchar(255) DEFAULT NULL,
  `card2_content` text,
  `card3_title` varchar(255) DEFAULT NULL,
  `card3_content` text,
  `Service_title` varchar(255) DEFAULT NULL,
  `Service_card_title_1` varchar(255) DEFAULT NULL,
  `Service_card_content_1` text,
  `Service_card_title_2` varchar(255) DEFAULT NULL,
  `Service_card_content_2` text,
  `S1_title` varchar(255) DEFAULT NULL,
  `S1_content` text,
  `S2_title` varchar(255) DEFAULT NULL,
  `S2_content` text,
  `S3_title` varchar(255) DEFAULT NULL,
  `S3_content` text,
  `workpress_title` varchar(255) DEFAULT NULL,
  `workpress_content` text,
  `solution_title` varchar(255) DEFAULT NULL,
  `solution_content` text,
  `Inquary_Title` varchar(255) DEFAULT NULL,
  `Inquary_content` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  KEY `submenu_id` (`submenu_id`),
  CONSTRAINT `menu_contents_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `menu_contents_ibfk_2` FOREIGN KEY (`submenu_id`) REFERENCES `submenus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_contents`
--

LOCK TABLES `menu_contents` WRITE;
/*!40000 ALTER TABLE `menu_contents` DISABLE KEYS */;
INSERT INTO `menu_contents` VALUES (5,16,23,'React Js Banner Titile','Banner Content for Rect js\n','Card React js','','','','','','','','','','','','','','','','','','','','','','','2025-01-07 14:23:51','2025-01-07 14:23:51'),(6,16,24,'Next Js','Next.js is a React framework that enables functionality such as server-side rendering and generating static websites for React based web applications.','High Performance','Next.js improves web performance through static generation and server-side rendering','SEO Optimization','Built-in SEO features help your site rank better in search engines.','Fast Development','Streamlines development with features like file-based routing and API routes.','Web Development Services','Custom Web Applications','We offer custom web application development tailored to your business needs.','Responsive Design','Our designs ensure your website looks great on any device.','Secure Sites','We implement the latest security protocols to keep your site safe.','Maintenance and Support','We provide ongoing support to keep your site running smoothly.','Scalable Solutions','Our solutions grow with your business.','WordPress Integration','Seamlessly integrate WordPress for a powerful CMS experience.','Custom Solutions','Tailor-made solutions to meet your unique business challenges.','Have Questions?','Contact us for more information or to get a custom quote.','2025-01-07 14:46:00','2025-01-07 14:46:00'),(7,17,25,'Node js','Node.js is a powerful JavaScript runtime built on Chrome\\\'s V8 engine, designed for building scalable network applications.','Event-Driven Architecture','Node.js uses an event-driven, non-blocking I/O model, making it lightweight and efficient.','Rich Ecosystem','With a vast number of modules available through npm, Node.js accelerates development.','Cross-Platform Compatibility','Node.js applications can run on various operating systems including Windows, Linux, and macOS.','Backend Development Services','Custom API Development','We build robust and scalable APIs to support your frontend applications.','Real-Time Applications','Develop real-time applications such as chat applications or online gaming with our expertise in Node.js','High Performance','Our Node.js solutions ensure high performance and low latency.','Scalability','We design applications that scale effortlessly as your business grows.','Security','Implementing best security practices to protect your data and applications.','CMS Integration','Integrate Node.js with CMS platforms to enhance content management.','Tailored Solutions','We provide customized solutions that cater specifically to your business requirements.\'','Need Assistance?','Reach out to us to learn more about how Node.js can benefit your projects.','2025-01-07 14:49:59',NULL),(8,17,26,'Mysql Database','MySQL is an open-source relational database management system, widely used for web applications.','Relational Database','MySQL uses a relational model, organizing data into tables with relationships between them.','High Performance','Optimized for speed, MySQL handles large databases quickly and efficiently.','Security Features','MySQL offers robust security features like user authentication, data encryption, and more.','Database Management Services','Custom Database Design','We design and implement databases tailored to your application\\\'s specific needs.','Data Migration Services','Our team ensures seamless data migration with minimal downtime and data integrity.','Data Integrity','Our MySQL solutions ensure data accuracy and reliability.','Scalability','We develop databases that grow with your business needs.','Support & Maintenance','We provide ongoing support to keep your MySQL databases running smoothly.','CMS Integration','Integrate MySQL with your CMS for efficient content management.','Customized Solutions','We offer solutions tailored to meet the unique requirements of your business.','Need Help?','Contact us to learn more about how MySQL can power your applications.','2025-01-07 19:18:36','2025-01-07 19:18:36');
/*!40000 ALTER TABLE `menu_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `menuName` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `subMenuName` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,'Menu','SubMenu','1','1','2025-01-06 14:05:02','2025-01-06 14:05:02'),(2,'Menu1','Mwnu2','9',NULL,'2025-01-06 14:10:06','2025-01-06 14:10:06'),(3,'Menu3','SubMenu1,SubMenu2','9',NULL,'2025-01-06 14:11:14','2025-01-06 14:11:14');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order_position` int DEFAULT '0',
  `status` enum('active','inactive') DEFAULT 'active',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (16,'Front End',0,'active',NULL,NULL,'2025-01-07 07:33:54','2025-01-07 07:33:54'),(17,'Back End',0,'active',NULL,NULL,'2025-01-07 09:16:52','2025-01-07 09:16:52');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ml_ai_integration`
--

DROP TABLE IF EXISTS `ml_ai_integration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ml_ai_integration` (
  `id` int NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `banner_content` text COLLATE utf8mb4_bin,
  `b_sub_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_sub_content` text COLLATE utf8mb4_bin,
  `overview_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `overview_content` text COLLATE utf8mb4_bin,
  `card1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card1_content` text COLLATE utf8mb4_bin,
  `card2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card2_content` text COLLATE utf8mb4_bin,
  `card3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `card3_content` text COLLATE utf8mb4_bin,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `sub_heading_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_content` text COLLATE utf8mb4_bin,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ml_ai_integration`
--

LOCK TABLES `ml_ai_integration` WRITE;
/*!40000 ALTER TABLE `ml_ai_integration` DISABLE KEYS */;
INSERT INTO `ml_ai_integration` VALUES (1,'Data Governance and Compliance 1','Ensure your data is managed responsibly with our data governance services. We help you establish policies and practices that maintain data quality, security, and compliance with relevant regulations.','Let me provide a detailed breakdown of Data Governance and Compliance frameworks.','Data Architecture Design encompasses the comprehensive framework for managing an organization\'s data assets. Here\'s a detailed analysis:','Overview','Machine Learning (ML) and AI integration represents the process of incorporating intelligent, data-driven decision-making capabilities into existing systems, products, and business processes. Here are the key aspects:','Core Components:','Governance Framework:\r\nPolicy development and enforcement\r\nStandards and procedures\r\nRole definitions and responsibilities\r\nDecision rights and accountabilities\r\nQuality management systems\r\nData Quality Management:\r\nData profiling and assessment\r\nQuality metrics and monitoring\r\nCleansing procedures\r\nValidation rules\r\nError handling protocols\r\nSecurity Controls:\r\nAccess management\r\nEncryption standards\r\nAuthentication protocols\r\nAudit logging\r\nIncident response procedures','Compliance Requirements:','Regulatory Standards:\r\nGDPR (General Data Protection Regulation)\r\nCCPA (California Consumer Privacy Act)\r\nHIPAA (Healthcare)\r\nSOX (Financial)\r\nIndustry-specific regulations\r\nPrivacy Management:\r\nData subject rights\r\nConsent management\r\nPrivacy impact assessments\r\nData protection measures\r\nCross-border data transfers','Implementation Strategy:','Assessment Phase:\r\nCurrent state analysis\r\nGap identification\r\nRisk assessment\r\nCompliance audit\r\nResource evaluation\r\nDesign Phase:\r\nPolicy framework development\r\nProcess mapping\r\nControl design\r\nTechnology requirements\r\nTraining program development\r\nImplementation:\r\nPolicy rollout\r\nProcess implementation\r\nTool deployment\r\nTraining execution\r\nMonitoring setup\r\nMaintenance:\r\nRegular audits\r\nPolicy updates\r\nCompliance monitoring\r\nPerformance tracking\r\nContinuous improvement','Key Processes:','Data Lifecycle Management:\r\nCreation/acquisition\r\nStorage and maintenance\r\nUsage and sharing\r\nArchival\r\nDisposal\r\nMetadata Management:\r\nBusiness metadata\r\nTechnical metadata\r\nOperational metadata\r\nReference data\r\nMaster data\r\nRisk Management:\r\nRisk identification\r\nAssessment methods\r\nMitigation strategies\r\nMonitoring procedures\r\nIncident response','Best Practices:','Documentation:\r\nPolicy documentation\r\nProcedure manuals\r\nTraining materials\r\nAudit trails\r\nCompliance records\r\nTraining and Awareness:\r\nRole-based training\r\nRegular updates\r\nAwareness programs\r\nCertification tracking\r\nPerformance measurement\r\nMonitoring and Reporting:\r\nCompliance dashboards\r\nAudit reports\r\nPerformance metrics\r\nIncident tracking\r\nExecutive reporting','Emerging Trends:','Automation:\r\nAutomated compliance checking\r\nAI-powered monitoring\r\nSmart contract implementation\r\nAutomated reporting\r\nPredictive compliance\r\nPrivacy Enhancement:\r\nPrivacy by design\r\nData minimization\r\nPurpose limitation\r\nStorage optimization\r\nRights management','Would you like me to elaborate on any specific aspect of Data Governance and Compliance ?','Why choose us for your business.','Learn content by interacting with an expert lesson or watching a video.\r\nPractice what you learned on realistic SAT test questions.\r\nReview your practice questions and learn how to improve.','Having any Query? Book an appointment.',NULL,'2024-12-26 17:21:22');
/*!40000 ALTER TABLE `ml_ai_integration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `out_team`
--

DROP TABLE IF EXISTS `out_team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `out_team` (
  `id` int NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `member_designation` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `member_content` text COLLATE utf8mb4_bin,
  `member_photo` text COLLATE utf8mb4_bin,
  `Inquary_Title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `out_team`
--

LOCK TABLES `out_team` WRITE;
/*!40000 ALTER TABLE `out_team` DISABLE KEYS */;
INSERT INTO `out_team` VALUES (1,'Sujit Kumar Singh','Founder And CEO','A visionary leader in data strategy development and executions at Fortune 500 companies. Engineer Graduate from Indian Institute of Engineering Science and Technologies, MBA from ICFAI Business School, CFA from ICFAI and a certified LEADer from Stanford Graduate School of Business, certified in Data Science for Advanced Analytics from UC, Irvine, he has successfully managed the execution of many transformative data strategies across industries.\r\n\r\nUnder his guidance, Neural Nest has developed groundbreaking AI solutions for tapping insights from unstructured data to drive business growth.','uploads/img/bf337654217d71d103fb362b67da0683.png',NULL,NULL,'2024-12-27 09:35:18'),(2,'John Sender','Sales VP (Advisor)','Neural Nest\'s Chief Sales Officer, whose storied 20-year journey at giants like Oracle and Informatica has honed his visionary and analytical prowess. An architect of growth and a seasoned entrepreneur, John\'s strategic insights and leadership are set to catapult our sales and brand to new heights. His expertise heralds a transformative era for our company.','uploads/img/431ff3e4e49c81480bcb2004f49489f3.png',NULL,NULL,'2024-12-27 09:36:27'),(3,'Alexander Morales','Solutions Architect','A renounced software engineer with a master\'s degree from California State University of Los Angeles in Computer Science and a bachelor’s degree in computer science from California State University of Monterey Bay. I mainly focused on software engineering, but I have experience in Data Science and Networking. I’ve built enterprise software applications for a Fortune 500 company.','uploads/img/21821b9afecf31f0f53cafd600f91442.png',NULL,NULL,'2024-12-27 09:37:13'),(4,'Tyler Kreider','Data Scientist','Tyler Kreider, raised in Ladera Ranch, CA, is a recent graduate in Computer Science from University of San Diego . Tyler is a Data Scientist at Neural Nest who also works on the full stack development.','uploads/img/6e1aef5b0d5117aa146b3da48a74fff7.png',NULL,NULL,'2024-12-27 09:38:04');
/*!40000 ALTER TABLE `out_team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `createdBy` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updatedDtm` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (12,'Test Data','saurabh_ankit@outlook.com','9654479936','2024-09-19','Danby Road\r\nQ.No 5/C','9','2024-09-30 12:56:21','9','2024-12-05 10:17:45');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submenus`
--

DROP TABLE IF EXISTS `submenus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `submenus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu_id` int DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order_position` int DEFAULT '0',
  `status` enum('active','inactive') DEFAULT 'active',
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `submenus_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submenus`
--

LOCK TABLES `submenus` WRITE;
/*!40000 ALTER TABLE `submenus` DISABLE KEYS */;
INSERT INTO `submenus` VALUES (23,16,'React Js',NULL,0,'active',NULL,NULL,'2025-01-07 07:33:54','2025-01-07 07:33:54'),(24,16,'Next Js',NULL,0,'active',NULL,NULL,'2025-01-07 07:33:54','2025-01-07 07:33:54'),(25,17,'Node js',NULL,0,'active',NULL,NULL,'2025-01-07 09:16:52','2025-01-07 09:16:52'),(26,17,'Mysql',NULL,0,'active',NULL,NULL,'2025-01-07 09:16:52','2025-01-07 09:16:52');
/*!40000 ALTER TABLE `submenus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_last_login`
--

DROP TABLE IF EXISTS `tbl_last_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_last_login` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userId` bigint NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_last_login`
--

LOCK TABLES `tbl_last_login` WRITE;
/*!40000 ALTER TABLE `tbl_last_login` DISABLE KEYS */;
INSERT INTO `tbl_last_login` VALUES (1,1,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-27 23:19:13'),(2,1,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-28 00:06:34'),(3,1,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-28 00:55:48'),(4,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-28 01:25:04'),(5,9,'{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-28 09:07:43'),(6,9,'{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-28 10:32:38'),(7,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-28 10:34:02'),(8,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-30 08:45:49'),(9,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-09-30 12:27:07'),(10,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-10-03 12:14:57'),(11,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 121.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36','Linux','2024-11-25 13:01:35'),(12,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-05 14:46:29'),(13,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-05 23:00:37'),(14,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-06 10:14:43'),(15,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Opera 114.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0','Windows 10','2024-12-06 14:58:09'),(16,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Opera 114.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0','Windows 10','2024-12-06 15:03:13'),(17,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-06 15:14:49'),(18,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Opera 114.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0','Windows 10','2024-12-06 23:22:58'),(19,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-07 23:33:32'),(20,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Opera 114.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0','Windows 10','2024-12-08 16:36:03'),(21,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-08 17:08:16'),(22,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-08 22:19:44'),(23,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Opera 114.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36 OPR/114.0.0.0','Windows 10','2024-12-08 22:49:01'),(24,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-09 12:07:14'),(25,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Saurabh Thakur\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-09 13:40:58'),(26,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-09 22:00:20'),(27,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-09 23:40:50'),(28,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-09 23:40:50'),(29,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-10 22:41:30'),(30,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-11 22:17:45'),(31,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-11 23:54:53'),(32,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-11 23:55:13'),(33,10,'{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Mrinmoy Roy\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-12 00:21:40'),(34,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-12 00:22:33'),(35,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-12 23:19:09'),(36,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-12 23:59:02'),(37,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-13 15:12:38'),(38,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-13 23:28:30'),(39,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-16 16:38:20'),(40,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-16 22:46:10'),(41,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-16 23:42:04'),(42,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-17 15:10:30'),(43,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-17 20:57:13'),(44,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-18 10:37:48'),(45,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-18 21:16:22'),(46,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-19 11:07:00'),(47,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-19 11:54:06'),(48,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-20 11:10:28'),(49,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-20 15:59:37'),(50,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-20 22:26:24'),(51,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-23 09:40:14'),(52,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-23 12:48:02'),(53,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-23 12:48:02'),(54,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-23 23:07:39'),(55,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 133.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36','Windows 10','2024-12-24 11:20:21'),(56,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-24 13:27:21'),(57,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-25 23:17:48'),(58,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-26 09:48:31'),(59,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-26 14:39:26'),(60,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-26 22:25:13'),(61,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-27 09:24:20'),(62,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-27 09:24:32'),(63,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-27 22:43:24'),(64,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-29 21:03:13'),(65,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-30 09:16:40'),(66,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-30 09:16:40'),(67,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2024-12-30 15:30:17'),(68,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-03 12:56:57'),(69,10,'{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Mrinmoy Roy\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-03 12:57:32'),(70,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-03 13:04:05'),(71,10,'{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Mrinmoy Roy\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-03 13:04:28'),(72,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-03 13:10:13'),(73,10,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"Mrinmoy Roy\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-03 13:11:18'),(74,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-03 23:22:01'),(75,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Opera 115.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 OPR/115.0.0.0','Windows 10','2025-01-04 01:43:10'),(76,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-04 01:44:34'),(77,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-05 19:20:22'),(78,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-06 00:45:02'),(79,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-06 09:14:03'),(80,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','::1','Chrome 131.0.0.0','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36','Windows 10','2025-01-06 15:39:52'),(81,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','127.0.0.1','Chrome 127.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','Linux','2025-01-06 19:34:02'),(82,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','127.0.0.1','Chrome 127.0.0.0','Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36','Android','2025-01-07 10:48:52'),(83,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','127.0.0.1','Chrome 127.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','Linux','2025-01-08 09:39:56'),(84,9,'{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"User Name\"}','127.0.0.1','Chrome 127.0.0.0','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36','Linux','2025-01-08 14:18:35');
/*!40000 ALTER TABLE `tbl_last_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_reset_password`
--

DROP TABLE IF EXISTS `tbl_reset_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_reset_password` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` bigint NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_reset_password`
--

LOCK TABLES `tbl_reset_password` WRITE;
/*!40000 ALTER TABLE `tbl_reset_password` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_reset_password` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_roles`
--

DROP TABLE IF EXISTS `tbl_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_roles` (
  `roleId` tinyint NOT NULL AUTO_INCREMENT COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text',
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_roles`
--

LOCK TABLES `tbl_roles` WRITE;
/*!40000 ALTER TABLE `tbl_roles` DISABLE KEYS */;
INSERT INTO `tbl_roles` VALUES (1,'System Administrator'),(2,'Manager'),(3,'Employee');
/*!40000 ALTER TABLE `tbl_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_users` (
  `userId` int NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint NOT NULL,
  `isDeleted` tinyint NOT NULL DEFAULT '0',
  `createdBy` int NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (1,'admin@example.com','$2y$10$TcnGl8i6YE3Kzx3rt5sYJuCCOHKHW2p4taZ0nNuMfetpFQPFF6lui\n','System Administrator','9890098900',1,0,0,'2015-07-01 18:56:49',1,'2018-01-05 05:56:34'),(2,'manager@example.com','$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm','Manager','9890098900',2,0,1,'2016-12-09 17:49:56',1,'2018-01-12 07:22:11'),(3,'employee@example.com','$2y$10$UYsH1G7MkDg1cutOdgl2Q.ZbXjyX.CSjsdgQKvGzAgl60RXZxpB5u','Employee','9890098900',3,0,1,'2016-12-09 17:50:22',3,'2018-01-04 07:58:28'),(9,'company@example.com','$2y$10$TcnGl8i6YE3Kzx3rt5sYJuCCOHKHW2p4taZ0nNuMfetpFQPFF6lui','User Name','9654479936',1,0,1,'2024-09-28 01:23:52',9,'2024-12-09 09:18:07'),(10,'mrinmoy.r@email.com','$2y$10$ugYz950yr96nJSFYxEzUqetPleUaupgsa3Y36XpwScrqyMiBe3/sS','Mrinmoy Roy','8001119820',1,0,1,'2024-12-11 17:49:02',NULL,NULL);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonial_client`
--

DROP TABLE IF EXISTS `testimonial_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonial_client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `client_designation` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `client_comments` text COLLATE utf8mb4_bin,
  `client_photo` text COLLATE utf8mb4_bin,
  `product_logo` text COLLATE utf8mb4_bin,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonial_client`
--

LOCK TABLES `testimonial_client` WRITE;
/*!40000 ALTER TABLE `testimonial_client` DISABLE KEYS */;
INSERT INTO `testimonial_client` VALUES (1,'Martin Jonas','Head of marketing, Inter inc.','  Certainly from my perspective been great success with lore giving that enterprises level magna assured quality due issue there live the blind texts separated.','uploads/img/0392b55a1665440dbf5d9eab3b25be65.png','uploads/img/3605173caa8d6480373529c6d9e4a2ea.jpeg',NULL,'2024-12-30 11:50:41'),(2,'Carolyn Tyler','Senior Developer, Neural Nest, LLC.',' Having a home based business is a wonderful asset to your life. The problem still stands it comes time advertise your business for a cheap cost you have looked.','uploads/img/5858eec9a7c9cdfe2bf3ce14c6d727e5.png','uploads/img/72acf67b26a13f95f50c6c6965d1c37a.jpeg',NULL,'2024-12-30 10:03:20'),(3,'Rebecca Jones','Senior UX Designer, Creativegigs.','  It’s a great experience to work with NeuralNest. They’re vey humble and expert & the service has been excellent. The author is very quick and nice when it comes to support.','uploads/img/e2d7ce621062c2c486dbb4caa0e66b6b.png','uploads/img/d40e57cb93fc0f14c938bbff48b9d9eb.jpeg',NULL,'2024-12-30 06:59:39');
/*!40000 ALTER TABLE `testimonial_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_analysis`
--

DROP TABLE IF EXISTS `user_analysis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_analysis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `b_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `b_content` text COLLATE utf8mb4_bin,
  `Serv_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Serv_content` text COLLATE utf8mb4_bin,
  `s1_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s1_content` text COLLATE utf8mb4_bin,
  `s2_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s2_content` text COLLATE utf8mb4_bin,
  `s3_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `s3_content` text COLLATE utf8mb4_bin,
  `target_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `target_content` text COLLATE utf8mb4_bin,
  `workprocess_title` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `workprocess_content` text COLLATE utf8mb4_bin,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_analysis`
--

LOCK TABLES `user_analysis` WRITE;
/*!40000 ALTER TABLE `user_analysis` DISABLE KEYS */;
INSERT INTO `user_analysis` VALUES (1,'Empowering Business With Modern Data Strategies And Artificial Intelligence','Driving corporate growth through Innovative Data Management, Machine Learning and Generative AI – Transforming data into strategic insights for a competitive edge.','Services We Provide with Quality.','Natural Language Processing (NLP) combines computational linguistics and machine learning to analyze and understand human language. By applying sophisticated algorithms, NLP systems can identify patterns, extract rules, and convert unstructured language data—like text or speech—into structured formats. This transformation enables tasks such as sentiment analysis, language translation, text summarization, and more, making it possible for machines to process, interpret, and respond to human language in a meaningful way.','Data Science','Convert data noise intelligent insights for competitive differentiation quality check equality.','Customer Support','Convert data noise to intelligent insights for competitive differentiation quality check.','Machine Learning','Convert data noise intelligent insights for competitive differentiation quality check equality.','Target Audience for your business','AI technology is perfect for best business solutions & we offer help to achieve your goals.\r\n\r\nVarious analysis options.\r\nPage Load (time, size, number of requests).\r\nAdvance Data analysis operation.','How Neural Nest, LLC process & works.','Frame the Problem\r\nLearn content by interacting with an expert lesson or watching a video.\r\nCollect the Data\r\nPractice what you learned on realistic SAT test questions.\r\nProcess the Data\r\nHave to be repudiated annoyances accepted the wise lorem ispum sample text.','2024-12-17 16:48:38','2024-12-23 18:26:15');
/*!40000 ALTER TABLE `user_analysis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-08 14:31:10
