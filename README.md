*Work in progress*

### Architecture explanations

### Installation

`composer require cocojr/clean-architecture`

### Usage

First, you need to write the dispatcher, implementing the interface in `CocoJr/CleanArchitecture/Business/Service/`.
You have 4 type of message:
 1. UseCase
 2. Event
 3. Query
 4. Command  
  
From your application, dispatch only UseCase.  
 - UseCase can dispatch multiple Event, Query and Command.  
 - Event can dispatch multiple Query and Command.  
 - Command and Query can dispatch Event.  

You have to separate your code using 2 folders:
 1. Application for your framework integration (or whatever).
 2. Business for your business logic.
 
In your Business folder, you write your code using only native functionnality. When you need a framework functionnality, you have to write an interface for it.  
In your Application folder, you implement all of your Business interface, and dispatch the UseCase. 

#### Example

 - A complete symfony implementation, using a redis messenger bus is available here: **TODO**
