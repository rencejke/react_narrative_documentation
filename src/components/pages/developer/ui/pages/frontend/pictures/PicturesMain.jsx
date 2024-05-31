import React from "react";
import SpinnerFetching from "../../../../../../partials/spinners/SpinnerFetching";
import Markdown  from "react-markdown";
import remarkGfm from 'remark-gfm'
import NoData from "../../../../../../partials/NoData";
import NoInformation from "../../../../../../partials/NoInformation";

const PicturesMain = ({ isLoading, isFetching, pictures }) => {
  return (
    <main className="w-full pt-[70px]">
      <div className="container">
        <div className="content pictures py-[100px]">

          {isFetching && <SpinnerFetching />}

          
        {pictures?.data.length === 0 && (
        <NoInformation/>)}

          {pictures?.data.map((item, key) => (
            item.pictures_is_active === 1 && (
              <Markdown key={key} remarkPlugins={[remarkGfm]}>{item.pictures_article}</Markdown>
            )
          ))}
        </div>
      </div>
    </main>
  );
};

export default PicturesMain
