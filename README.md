# Production-Ready Multi-Tier LAMP Stack on AWS

This repository contains a CloudFormation template and configuration files to deploy a highly available, multi-tier LAMP stack utilizing **AWS ECS Fargate** for the application tier and **Amazon RDS MySQL** for the database tier.

## Architecture Diagram

![AWS Architecture Diagram](architecture-diagram.png)

## Features
* **Compute:** AWS ECS Fargate for serverless container execution.
* **Database:** Managed Amazon RDS MySQL instance deployed across secure subnets.
* **Networking & Security:** Isolated public and private subnets with strictly configured Security Groups.
* **Load Balancing:** AWS Application Load Balancer (ALB) routing traffic safely to your containers.