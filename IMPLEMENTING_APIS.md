# Scope
This document describes the high-level steps necessary to handle a user's request for data over an API. The process for handling requests and returning a data response is a very common practice in any programming language. Because software developers can choose to create APIs using many different technologies this guide doesn't describe specific implementation details.

# Objective
Users will send [web-requests](https://www.codecademy.com/articles/http-requests) for activity opportunity data to your system. Once your system receives a request it will query a data store for the relevant data and return the results formatted and organised in a way that conforms to the OpenActive specifications. 

# Process

The following process assumes that you have the appropriate [technical architecture](https://github.com/openactive/developer-documentation/blob/info-arch-sketch/docs/using-data/technical-requirements.md) to receive and handle web-requests.

### 1. Identify any [query parameters](https://www.codecademy.com/learn/introduction-to-javascript/modules/intermediate-javascript-requests) sent with the request
For example your application may allow users to search for activity opportunities in a geographic area, or for certain dates and times. For example "select all badminton courts in Sheffield in the next 5 days"

### 2. Query a data store for results that matches the user's request, using the query parameters if provided.

### 3. Transform the results
1. The data must also be organised as described in the [Open Active data standards](https://developer.openactive.io/specifications/specifications-overview). This is so that data users know what to expect from all OpenActive data providers, and make it easier to combine data from different sources. 
    1. Use software to translate the data returned by a database query into data objects that match the OpenActive Standards.
    2. The OpenActive team have created some ["helper" libraries](https://github.com/topics/implementation-support) for some programming languages which developers can use to build data objects.  Even if a library does not exist for your programming language you may be able to replicate the data objects and create a library of your own.
2. Because data responses can be very large, the data itself must be further organised into pages according to the [Realtime Paged Data Exchange (RPDE) standard](https://openactive.io/realtime-paged-data-exchange/). This enables data users to handle the data in chunks in a predictable way for all data providers. It may be necessary to add row identifiers and modified timestamps to your data to satisfy the RDPE requirements.
3. Before the data is returned to the user it finally needs to be converted into a standard format that is easy for the user to process. Usually the data will be formatted as [JSON](https://www.digitalocean.com/community/tutorials/an-introduction-to-json), a common format for sharing data on the web. There are libraries that will convert data objects into JSON for most programming languages 

### 4. Return the data as a [web-response](https://medium.com/@jen_strong/the-request-response-cycle-of-the-web-1b7e206e9047)

