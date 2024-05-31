import React from "react";
import SpinnerFetching from "../../../../../../partials/spinners/SpinnerFetching";
import NoData from "../../../../../../partials/NoData";
import NoInformation from "../../../../../../partials/NoInformation";
import MarkDownCode from "./MarkDownCode";

const CodeMain = ({ isLoading, isFetching, code }) => {
  return (
    <main className="w-full pt-[70px]">
      <div className="container">
        <div className="content code py-[100px]">

          {isFetching && <SpinnerFetching />}

          {code?.data.length === 0 && <NoInformation />}

          {code?.data.map((item, key) => (
            item.code_is_active === 1 && (
              <React.Fragment key={key}>
                <MarkDownCode>{item.code_article}</MarkDownCode>
              </React.Fragment>
            )
          ))}
        </div>
      </div>
    </main>
  );
};

export default CodeMain;
